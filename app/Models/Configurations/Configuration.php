<?php

namespace App\Models\Configurations;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Configuration extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'option_key',
        'option_value',
        'input_type',
        'sort',
    ];

    protected $casts = [
        'option_key' => 'string',
        'option_value' => 'string',
        'input_type' => 'string',
        'sort' => 'integer',
    ];


    public function getOptionValue($option_key)
    {
        if (!Cache::has('configuration_exists_' . $option_key)) {
            // configuration not in cache, check database and create if not exists
            if (!Configuration::where('option_key', $option_key)->exists()) {
                Configuration::create(['option_key' => $option_key, 'input_type' => 'text', 'option_value' => '']);
            }
            // Cache the configuration existence
            Cache::forever('configuration_exists_' . $option_key, true);
            return null;
        }else{
            $db_value = $this->where('option_key', $option_key)->first()?->option_value;
            $cache_value = Cache::get('configuration_exists_' . $option_key);
            if($cache_value&&($db_value === $cache_value)){
                return $cache_value;
            }else{
                Cache::forever('configuration_exists_' . $option_key, $db_value);
                return $db_value;
            }
        }
    }

}
