
@if (isset($export))
 @include('includes.export-head')
@endif
 

    <div class="card mt-4 ">
      <div class="table table-responsive">
        <table class="w-100">
          <thead>
            <tr>
            <th>#</th>
            @if($formable)
              @forelse ($formable as $key => $form)
                <th scope="col">{{form_labels($form['label'])}}</th>
              @empty
              @endforelse
              @if (!isset($export))
              <th></th>
              @endif
            @endif
           </tr>
          </thead>
          <tbody>

        @forelse ($data as $k => $item)
          <tr>
            <td>{{$k+1}}</td>
            @if($formable)
              @forelse($formable as $key => $form)
              <td>{{ $item->{$key} }}</td>
              @empty
              @endforelse
            @endif

            @if (!isset($export))
            <td class="">
              <div class="flex">

                <button wire:click="edit({{$item->id}})" class="btn btn-primary" type="button">
                  <span class="icon"><i class="fa fa-edit"></i></span>
                </button>

                <button 
                wire:click="delete({{$item->id}})" 
                wire:confirm="Are you sure you want to delete this {{$model_name}}?"
                class="btn btn-danger ml-2" type="button">
                  <span class="icon"><i class="fa fa-trash"></i></span>
                </button>
              </div>
            </td>
            @endif
            
          </tr>
          @empty

          <div class="card empty">
            <div class="card-content">
              <div>
                <span class="icon large"><i class="mdi mdi-emoticon-sad mdi-48px"></i></span>
              </div>
              <p>Nothing's here…</p>
            </div>
          </div>
            
          @endforelse
        
          </tbody>
        </table>
        @if (!isset($export))
        <div class="table-pagination">
            @if (isset($data) && $data->hasPages())
                {{ $data->links('vendor.livewire.simple-tailwind') }}  
            @endif
        </div>
        @endif
      </div>
    </div>
