    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          {{ ucfirst($action) }} {{$model_name}}
        </p>
      </header>
      <div class="card-content">
        <div class=" p-3 border rounded">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">
                <x-input label="Name" wire:model="name" />
            </div>
       {{-- <div class="mt-5">
              <h1>Permissions</h1>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                @forelse ($permissions as $permission)
                <label for="{{$permission->name}}">
                  <span>{{$permission->name}}</span>
                  <input type="checkbox" value="{{$permission->name}}" wire:model="permission" />
                </label>
                
                @empty
                    
                @endforelse
              </div>
             </div> --}}
        
            <!-- Submit Button -->
            <div class="mt-6 flex justify-between">
                <x-button type="button" 
                wire:click="cancel" 
                wire:confirm="Are you sure you want to cancel?"
                color="red" icon="x-mark" position="right" text="Cancel" />

                @if($action=='edit'&&$model)

                <x-button 
                type="button"
                wire:click="store({{$model->id}})"
                wire:confirm="Are you sure you want to {{$action=='add'?'save':'update'}} this {{$model_name}}?" 
                color="green" text="{{$action=='add'?'Add':'Update'}}" icon="check" position="right" />

                @else

                <x-button 
                type="button"
                wire:click="store()"
                wire:confirm="Are you sure you want to {{$action=='add'?'save':'update'}} this {{$model_name}}?" 
                color="green" text="{{$action=='add'?'Add':'Update'}}" icon="check" position="right" />

                @endif


            </div>
        </div>
        
      </div>

    
    </div>


   




