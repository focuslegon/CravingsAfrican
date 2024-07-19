    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          {{ ucfirst($action) }} {{$model_name}}
        </p>
      </header>
      <div class="card-content">
        <div class="p-2">
           


              @forelse ($settings as $key => $item)
              <p class="mt-3"></p>
              <div class="row ml-3  gap-4 ">
               @if ($item['input_type']=='text')

              <div>
                <input type="hidden" wire:model="settings.{{$key}}.id">
                <label for="">{{form_labels($item['option_key'])}}</label>
                <input wire:model="settings.{{$key}}.option_value" class="form-control" />
              </div>
             
               @elseif($item['input_type']=='file')
               
               <div class="col-md-3">
                <input type="hidden" wire:model="settings.{{$key}}.id"  />
                <label for=""label="" >
                 <span> {{form_labels($item['option_key'])}}</span><br>
                  <input type="file"  wire:model="settings.{{$key}}.option_value" />
                </label>
                <img src="{{asset($item['option_value'])}}" alt="" style="width: 60px">
                <a href="{{asset($item['option_value'])}}" target="_blank" class="ml-3 text-blue-500">View</a>
              </div>

               @elseif($item['input_type']=='textarea')

               <div class="col-md-3">
                <input type="hidden" wire:model="settings.{{$key}}.id">
                <label for="">{{form_labels($item['option_key'])}}</label>
                <textarea wire:model="settings.{{$key}}.option_value" :rows="3" class="form-control" />
              </div>

               @endif
               <div class="col-md-3">
                <label for="">Input Type</label>
                <select wire:model="settings.{{$key}}.input_type" class="form-control">
                  <option value="text">Text</option>
                  <option value="file">File</option>
                  <option value="textarea">Textarea</option>
                </select>
               </div>

               <div class="col-md-3">
                <label for="">Sort</label>
                <input label="Sort" wire:model="settings.{{$key}}.sort" class="form-control">
               </div>

              </div>
              @empty
                  
              @endforelse
       
        
            <!-- Submit Button -->
            <div class="mt-6 flex justify-between">

                <x-button 
                type="button"
                wire:click="store()"
                wire:confirm="Are you sure you want to update this {{$model_name}}?" 
                color="green" text="Update" icon="check" position="right" />

           


            </div>
        </div>
        
      </div>

    
    </div>


   




