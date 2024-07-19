<?php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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


new #[Layout('layouts.app')] class extends Component
{
    use WithPagination, Interactions, GeneralTrait;

    public $model_name='Role';
    public $action = 'add';
    public $path='roles';
    public $search = '';
    public $form = false;
    public $from_date;
    public $to_date;

    public $paginate = 10;
    public $model;
    public $permission=[];

    // form data 
    public $name='';


    public function boot()
    {
        $this->paginate = default_pagination_number();
    }

    public function mount()
    {

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
        $view = 'livewire.account.'.$this->path.'.list';
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
        $this->model = Role::find($id);
        $this->name = $this->model->name;

        $this->permission = $this->model->permissions->pluck('name')->toArray();
        $this->dispatch('editModel');
    }

    public function clearForm(){
        $this->name = '';
        $this->model = null;
    }

    public function cancel()
    {
        $this->form = false;
        $this->dispatch('cancelModel');
        $this->clearForm();
    }

    public function delete($id){
        $user = Role::find($id);
        $user->delete();
        $this->dialog()->success('roles deleted successfully.')->send();
    }


    public function store($id=null){

        DB::beginTransaction();

        try {
            
        $Role = $id ? Role::find($id) : null;
        if ($Role) {
            $Role->name = $this->name;
            $Role->save();

            $Role->syncPermissions($this->permission);
            DB::commit();
            $this->clearForm();
            $this->dialog()->success('Role updated successfully.')->send();
            $this->form = false;
            $this->dispatch('cancelModel');
            return;
        } else {
            $this->validate([
                'name' => ['required', 'string'],
            ]);
            $Role = new Role();
            $Role->name = $this->name;
            $Role->save();
            $Role->syncPermissions($this->permission);
            DB::commit();
            $this->clearForm();
            $this->dialog()->success('Role created successfully.')->send();
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
        $data = Role::query();
        $data =$data->orderBy('created_at', 'desc');
        $data =$data->when($this->search, function ($query) {
            $query->where('name', 'like', '%'.$this->search.'%');
        });

        $data = $paginate ?$data->paginate($this->paginate) :$data->get();

        $title = $this->model_name.' Report';

        $permissions = Permission::all();

        return [
            'data' => $data,
            'title' => $title,
            'permissions' => $permissions,
        ];
    }

    
}

?>

<div>
    @section('title', $model_name)
    <x-loading />
    <div class="container account-container custom-account-container">
        <div class="row">
         @include('livewire.account.sidebar', ['activeTab' => 'roles'])
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


