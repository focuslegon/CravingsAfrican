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
              @if($formable)
                @forelse ($formable as $k => $form)

                 @if ($form['type']=='text')
                   <x-input label="{{form_labels($form['label'])}}" wire:model="{{$k}}" />

                 @elseif ($form['type']=='number')
                   <x-number label="{{form_labels($form['label'])}}" wire:model="{{$k}}" />

                 @elseif ($form['type']=='file')
                 <div >
                  <label for=""label="" > {{form_labels($form['label'])}}</label>
                  <x-filepond::upload wire:model="{{$k}}" />
                   <x-input-error :messages="$errors->get($k)" />
                   @if ($model?->{$k})
                   <a href="{{asset($model?->{$k})}}" target="_blank" class="ml-3 text-blue-500">View</a>
                   @endif
                </div>

                 @elseif ($form['type']=='textarea')
                  <div class="col-span-2">
                    <x-textarea label="{{form_labels($form['label'])}}" wire:model="{{$k}}" />
                  </div>

                 @elseif ($form['type']=='select')
                  @php
                      $options = isset($form['options']) ? $form['options'] : [];
                  @endphp
                   <x-select.styled label="{{form_labels($form['label'])}}" wire:model="{{$k}}" :options="$options" 
                   select="label:label|value:value" searchable />

                @else
                   <x-input label="{{form_labels($form['label'])}}" wire:model="{{$k}}" />
                @endif
                    
                @empty
                @endforelse
              @endif
            </div>
        
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


   




