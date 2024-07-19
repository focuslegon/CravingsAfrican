
@if (isset($export))
 @include('layouts.includes.export-head')
@endif
 

<div class="card mt-4 ">
  <div class="table table-responsive">
    <table class="w-100">
          <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            @if (!isset($export))
            <th></th>
            @endif
          </tr>
          </thead>
          <tbody>

        @forelse ($data as $k => $item)
          <tr>
            <td>{{$k+1}}</td>
            <td>{{$item->name}}</td>

            @if (!isset($export))<td class="">
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
            {{ $data->links('vendor.livewire.bootstrap') }}  
        </div>
        @endif
      </div>
    </div>
