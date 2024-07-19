<?php
use App\Models\Configurations\Configuration;

use Livewire\Volt\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\On;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

// Exports
use Illuminate\Http\Request;
use TallStackUi\Traits\Interactions; 
use App\Traits\GeneralTrait;


new 
#[Layout('layouts.app')]
class extends Component
{
    use WithPagination ,WithFileUploads, Interactions, GeneralTrait;

    public $model_name='Setting';
    public $action = 'add';
    public $search = '';
    public $form = false;
    public $from_date;
    public $to_date;

    public $paginate = 10;
    public $settings=[];

    public function boot()
    {
        if (!user_has_role('admin')) {
            abort(403);
        }
        $this->paginate = default_pagination_number();
    }
   

    public function mount()
    {

        $data = Configuration::query();
        $data =$data->orderBy('sort');
        $data = $data->get();
        foreach ($data as $key => $value) {
            $this->settings[]  = [
                'id'=> $value->id, 
                'option_key'=> $value->option_key, 
                'option_value' => $value->option_value,
                'input_type' => $value->input_type,
                'sort' => $value->sort,
            ];
        }
    }


    public function store(){

        DB::beginTransaction();

        try {
        
            foreach ($this->settings as $key => $setting) {

               if ($config = Configuration::find($setting['id'])) {
                  $config->option_value = $setting['option_value'];
                  $config->sort = $setting['sort'];
                  $config->input_type = $setting['input_type'];

                  if ($setting['input_type'] == 'file' && 
                      $setting['option_value'] instanceof \Livewire\Features\SupportFileUploads\TemporaryUploadedFile) {
                      $photo = $setting['option_value'];
                    //   // get photo name 
                    //   $photo_name = $photo->getClientOriginalName();
                      $path = $photo->store('configurations', 'public');
                      
                      $config->option_value = 'storage/'.$path;
                  }
         
                  $config->save();
               }
            }

            DB::commit();
            $this->dialog()->success('Success!', 'Configuration updated successfully.')->send();
            return;
       

       } catch (\Throwable $th) {
            log_system_errors($th);
            DB::rollBack();

            $this->dialog()->error('Error!', 'Something went wrong!, please contact support. :'. $th->getMessage())->send();
        }
    }


    public function with($paginate=true): array
    {
        $title = $this->model_name.' Report';

        return [
            'title' => $title,
        ];
    }

    
}

?>

<div>
    <x-loading />
        @section('title', $model_name)
         <div class="container account-container custom-account-container">
             <div class="row">
              @include('livewire.account.sidebar', ['activeTab' => 'settings'])
               <div class="col-lg-9 order-lg-last order-1 tab-content">
                @include('livewire.account.settings.form')
              </div>
             </div>
         </div>
         
</div>


