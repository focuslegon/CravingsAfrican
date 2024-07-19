<?php
use Livewire\Volt\Component;
use Livewire\With\Url;
use Livewire\Attributes\On;

new class extends Component {

    public $show_paginate;
    public $show_from_date;
    public $show_to_date;
    public $show_search;
    public $show_export;
    public $show_add_model;
    public $add_model=false;
    public $name;
    public $model_name;

    public $paginate = 10;
    #[Url]
    public $from_date;
    #[Url]
    public $to_date;
    public $date_interval;
    public $search = '';
    public $export = '';


     #[On('cancelModel')] 
     public function cancelModel()
    {
        $this->show_from_date = true;
        $this->show_to_date = true;
        $this->show_search = true;
        $this->show_paginate = true;
        $this->show_export = true;
        $this->show_add_model = true;
        
    }

      #[On('editModel')] 
      public function editModel()
    {
        $this->show_from_date = false;
        $this->show_to_date = false;
        $this->show_search = false;
        $this->show_paginate = false;
        $this->show_export = false;
        $this->show_add_model = false;
        
    }

    // dispatch the selected checkbox values
    public function updateDateInterval($value){
        $this->dispatch('updateDateInterval', date_interval : $value);
    }

    public function addModel()
    {
        $this->show_from_date = false;
        $this->show_to_date = false;
        $this->show_search = false;
        $this->show_paginate = false;
        $this->show_export = false;
        $this->show_add_model = false;

        $this->dispatch('addModel', add_model : true);
    }

    public function updatePaginate()
    {
        $this->dispatch('updatePaginate', paginate : $this->paginate);
    }

    public function updateFromDate()
    {
        $this->dispatch('updateFromDate', from_date : $this->from_date);
    }

    public function updateToDate()
    {
        $this->dispatch('updateToDate', to_date : $this->to_date);
    }

    public function updateSearch()
    {
        $this->dispatch('updateSearch', search : $this->search);
    }

    public function updateExport($type)
    {
        $this->export = $type;
        $this->dispatch('updateExport', export : $this->export);
    }
    

    
}

?>
<header class="card-header mb-2 flex justify-end gap-2">
    @if (isset($show_add_model)&&$show_add_model)
   <button type="" class="btn btn-primary" wire:click="addModel()">Add {{isset($model_name) ? $model_name : 'Model'}}</button>
    @endif

   @if (isset($show_export)&&$show_export)
    <div class="px-4 py-1 border-2 rounded border-gray-300">
        <x-dropdown text="Export">
            <x-dropdown.items icon="document" text="PDF" wire:click="updateExport('pdf')" />
            <x-dropdown.items icon="document-text" text="Ecxel" wire:click="updateExport('excel')" separator />
        </x-dropdown>
    </div>
    @endif

    @if (isset($show_paginate)&&$show_paginate)
    <x-select.styled wire:model="paginate" wire:change="updatePaginate" required
    :options="[
        ['label' => '10 .', 'value' => 10],
        ['label' => '20 .', 'value' => 20],
        ['label' => '50 .', 'value' => 50],
        ['label' => '100 .', 'value' => 100],
        ['label' => 'All .', 'value' => 100000000000000],
    ]" select="label:label|value:value" />
    @endif
    @if (isset($show_search)&&$show_search)
     <x-input icon="magnifying-glass" position="right" wire:model="search" placeholder="Search Here..." wire:keydown.debounce.150="updateSearch" />
    @endif
</header>