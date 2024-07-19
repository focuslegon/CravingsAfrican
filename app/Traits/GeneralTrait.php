<?php

namespace App\Traits;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

trait GeneralTrait {

    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (request()->get('page') ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        $paginate = new LengthAwarePaginator(
            $items->forPage($page, $perPage),
            $items->count(),
            $perPage,
            $page,
            $options
        );

        return $paginate->withPath(request()->url());
    }

}