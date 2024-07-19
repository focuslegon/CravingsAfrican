<?php
use Spatie\Permission\Models\Role;

use App\Models\User;

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

// Exports
use App\Exports\ExportService;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ViewExport;
use Illuminate\Http\Request;
use TallStackUi\Traits\Interactions; 
use App\Traits\GeneralTrait;


new 
#[Layout('layouts.app')] 
class extends Component
{
    use WithPagination, Interactions, GeneralTrait;

    public $model_name='User';
    public $path='users';
    public $action = 'add';
    public $search = '';
    public $form = false;
    public $from_date;
    public $to_date;
    public $role=[];

    public $db_model;
    public $paginate = 10;
    public $model;

    // form data 
    public $name;
    public $username;
    public $email;
    public $phone;
    public $is_active;
    public $status;
    public $password;


    public function formable() : array
    {
        return [
            'name' => [
                'label' => 'Name',
                'type' => 'text',
                'validation' => ['required', 'string'],
            ],
            'username' => [
                'label' => 'Username',
                'type' => 'text',
                'validation' => ['required', 'string'],
            ],
            'email' => [
                'label' => 'Email',
                'type' => 'text',
                'validation' => ['required', 'string'],
            ],
            'phone' => [
                'label' => 'Phone',
                'type' => 'text',
                'validation' => 'nullable',
            ],
            'is_active' => [
                'label' => 'is_active',
                'type' => 'select',
                'options' => [
                    [
                        'label' => 'Yes',
                        'value' => 1
                    ],
                    [
                        'label' => 'No',
                        'value' => 0
                    ],
                ],
                'validation' => 'nullable',
            ],
            'status' => [
                'label' => 'status',
                'type' => 'select',
                'options' => ['active', 'inactive'],
                'validation' => 'nullable',
            ],
            'password' => [
                'label' => 'Password',
                'type' => 'password',
                'validation' => 'nullable',
                'table' => false
            ],
      ];
    }

   
    public function boot()
    {
        if (!user_has_role('admin')) {
            abort(403);
        }
        $this->paginate = default_pagination_number();
    }

    public function mount(User $db_model)
    {
        $this->db_model = $db_model;

    }
 

    #[On('updatePaginate')] 
     public function updatePaginate($paginate)
    {
        $this->resetPage();
        $this->paginate = $paginate;
        
    }

    #[On('updateSearch')] 
    public function updateSearch($search)
    {
        $this->resetPage();
        $this->search = $search;
        
    }

      #[On('addModel')] 
      public function add($add_model)
    {
        $this->resetPage();
        $this->action = 'add';
        $this->form = $add_model;
        $this->clearForm();
        
    }

    #[On('updateExport')] 
   public function updateExport($export)
    {
        $name = $this->model_name.'-Report';
        $view = 'livewire.pages.account.'.$this->path.'.list';
        $data = $this->with(paginate:false);
        $exportService = new ExportService($export,$name,$view,$data);
        $html = $exportService->export();
        if ($export=='excel') {
            return Excel::download(new ViewExport($html), $name . '.xlsx');
        }else{
            return response()->streamDownload(function () use($html) {
                $pdf = App::make('dompdf.wrapper');
                $pdf->loadHTML($html);
                echo $pdf->stream();
            }, $name.'.pdf');
        }
       
    }

    public function edit($id){
        $this->form = true;
        $this->action = 'edit';
        $this->model = $this->db_model::find($id);
        // set form data
        if ($this->formable()) {
            foreach ($this->formable() as $key => $form) {
                // dont set password
                if($key=='password') continue;
            $this->{$key} = $this->model->{$key};
           }
        }
        $this->dispatch('editModel');
    }

    public function clearForm(){
        if($this->formable()){
            foreach ($this->formable() as $key => $form) {
                $this->{$key} = null;
            }
        }

        // clear model
        $this->model = null;
    }

    public function cancel()
    {
        $this->form = false;
        $this->dispatch('cancelModel');
        $this->clearForm();
    }

    public function delete($id){
        $md = $this->db_model::find($id);
        $md->delete();
        $this->clearForm();
        $this->dialog()->success($this->model_name.' deleted successfully.')->send();
    }
    

    public function resetPassword($id){
        $user = User::find($id);
        // generate rand password
        $password = rand(1, 999999);
        $user->password = bcrypt($password);
        $user->save();
        $this->dialog()->success('User password reset successfully: '.$password.' ')->send();
    }


    public function store($id=null){

        DB::beginTransaction();
        // get the validation from fromable in array
        $validation = [];
        if ($this->formable()) {
            foreach ($this->formable() as $key => $form) {
              $validation[$key] = $form['validation'];
           }
        }

        $this->validate($validation);
        try {
            
            $md = $id ? $this->db_model::find($id) : null;
        if ($md) {
            if ($this->formable()) {
                foreach ($this->formable() as $key => $form) {
                 // remove password 
                 if ($key=='password') {
                     continue;
                 }
                 $md->{$key} = $this->{$key};
                }
            }
            if ($this->password) {
            $md->password = bcrypt($this->password);
            }
            $md->save();
            $md->syncRoles($this->role);

            DB::commit();
            $this->clearForm();
            $this->dialog()->success( $this->model_name.' updated successfully.')->send();
            $this->form = false;
            $this->dispatch('cancelModel');
            return;
        } else {

            
            $md = new $this->db_model;
            if ($this->formable()) {
                foreach ($this->formable() as $key => $form) {
                 // remove password
                 if ($key=='password') {
                     continue;
                 }
                 $md->{$key} = $this->{$key};
                }
            }

            if ($this->password) {
            $md->password = bcrypt($this->password);
            }else{
            $md->password = bcrypt('123');
            }
            $md->save();
            $md->syncRoles($this->role);
            DB::commit();
            $this->clearForm();
            $this->dialog()->success($this->model_name.' created successfully.')->send();
            $this->form = false;
            $this->dispatch('cancelModel');
            return;

        }

       } catch (\Throwable $th) {
            log_system_errors($th);
            DB::rollBack();

            $this->dialog()->error('Error!', 'Something went wrong!, please contact support. :'. $th->getMessage())->send();
        }
    }


    public function with($paginate=true): array
    {
        $data = $this->db_model::query();
        $data =$data->orderBy('created_at', 'desc');

        $data =$data->when($this->search, function ($query) {
           return $query->where('username', 'like', '%'.$this->search.'%')
            ->orWhere('name', 'like', '%'.$this->search.'%');
        });
        
        $data = $paginate ?$data->paginate($this->paginate) :$data->get();

        $title = $this->model_name.' Report';

        $roles = Role::all();

        return [
            'data' => $data,
            'title' => $title,
            'roles' => $roles,
            'formable' => $this->formable(),
        ];
    }

    
}

?>

<div>
    @section('title', $model_name.'s')
    <x-loading />
    <div class="container account-container custom-account-container">
        <div class="row">
         @include('livewire.account.sidebar', ['activeTab' => 'users'])
          <div class="col-lg-9 order-lg-last order-1 tab-content">
            <section class="section main-section">

                @livewire('includes.wire-filter', [
                    'model_name'=>$model_name,
                    'show_add_model'=>true,
                    'show_export' => true,
                    'show_paginate' => true,
                    'show_search' => true,
                    ])
                @if(!$form)
                @include('livewire.account.'.$path.'.list', ['data' => $data])
                @else
                @include('livewire.account.'.$path.'.form')
                @endif

            </section>
          </div>
        </div>
    </div>
</div>


