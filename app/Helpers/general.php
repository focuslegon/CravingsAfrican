<?php

use App\Models\Logs\ActivityLog;
use Carbon\Carbon;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Number;
use Illuminate\Support\Facades\Request;
use Vinkla\Hashids\Facades\Hashids;

if (!function_exists('user')) {
    /**
     * Generate a url for the application.
     *
     * @param  string $guard
     * @return object
     */
    function user($guard=null)
    {
        return auth($guard)->user();
    }
}


if (!function_exists('encode_id')) {
    function encode_id($id)
    {
        return Hashids::encode($id);
    }
}


if (!function_exists('decode_id')) {
    function decode_id($id)
    {
        return safe_array_access(Hashids::decode($id),[0]);
    }
}


if (!function_exists('amount_format')) {
    /**
     */
    function amount_format($amount, $sign=true)
    {       
            return $sign ? Number::currency((float) $amount, in: currency()) : Number::format((float) $amount, precision: 2);

    }

}

if (!function_exists('generate_unique_code')) {
    function generate_unique_code($length=8)
   {
   
    if ($length < 1 || $length > 20) {
        throw new InvalidArgumentException('Length must be between 1 and 20.');
    }

    // Generate a random number with desired length
    $randomPartLength = $length - 6; // 6 digits for microtime part
    $randomPart = (string) random_int(pow(10, $randomPartLength - 1), pow(10, $randomPartLength) - 1);

    // Get the microtime as a numeric string
    $microtimePart = substr(str_replace('.', '', microtime(true)), -6);

    // Combine random part and microtime part
    $uniqueCode = $randomPart . $microtimePart;

    // If the combined length exceeds the desired length, truncate it
    if (strlen($uniqueCode) > $length) {
        $uniqueCode = substr($uniqueCode, 0, $length);
    }
    return $uniqueCode;
   }
}

if (!function_exists('date_time_format')) {
    /**
     */
    function date_time_format($date, $format='d M Y H:i A', $time_ago=false)
    {
       if ($time_ago) {
        return time_ago($date);
       }
       return Carbon::parse($date)->format($format);
       
    }
}

if (!function_exists('list_asset')) {
    function list_asset($asset,$export=false){
        if ($export) {
           return public_path(asset($asset));
        }else{
            return asset($asset);     
        }
    }
}


if (!function_exists('storage_asset')) {
    function storage_asset($path) {
        return asset('storage/' . $path);
    }
}

if (!function_exists('generate_signature')) {
    function generate_signature($data, $key) {
        return hash_hmac('sha256', json_encode($data), $key);
    }
}

if (!function_exists('addParamsToUrl')) {
    function addParamsToUrl($url, $params)
    {
        $queryString = http_build_query($params);
        $separator = (strpos($url, '?') === false) ? '?' : '&';
        return $url . $separator . $queryString;
    }
}

if (!function_exists('similarity_percentage')) {
    function similarity_percentages($str1, $str2) {
        $len1 = strlen($str1);
        $len2 = strlen($str2);

        // Calculate the Levenshtein distance
        $maxLen = max($len1, $len2);
        $levenshteinDistance = levenshtein($str1, $str2);

        // Calculate the similarity percentage
        $percentage = ((1 - ($levenshteinDistance / $maxLen)) * 100);

        return $percentage;
    }
}



if (!function_exists('active_route')) {
    /**
     * @return string
     */
    function active_route($route_name)
    {
        $route_name = (string)$route_name;
        $is_active = Request::routeIs($route_name) || Request::is("$route_name/*");
        return $is_active ? 'active' : '';
    }
}


if (!function_exists('gallery_file_upload')) {

    function gallery_file_upload(UploadedFile $file,$module_type)
    {   
        if ($file &&  !empty($file) && ($file instanceof UploadedFile)){
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME) . '_' . Str::random(10).'_'.time(). '.' . $file->extension();

            if(in_array(strtolower($file->getClientOriginalExtension()),['png','jpg','jpeg','webp','heic','heif','bmp'])){
                // $image = Image::make($file);
                // $path =  $module_type.'/'.$fileName;
                // Storage::disk('public')->put($path, $image->encode('jpg', 75));
                // return 'storage/'.$path;
            }
            return 'storage/'.$file->storeAs($module_type, $fileName, 'public');
        }
     }
    }

    if (!function_exists('dynamic_page_prefix')) {
        /**
         * @return string
         */
      function dynamic_page_prefix(){
        return  'browse';
      }
    }

    if (!function_exists('form_labels')) { 
        function form_labels($label)
        {
           $exp_label = explode('_',$label);
           $leb = '';
           foreach ($exp_label as $value) {
            
              if ($value=='id') {
              continue;
              }
              $leb .=$value.' ';
           }
           return ucwords($leb);
        }
    }
    
    
    if (!function_exists('general_labels')) { 
        function general_labels($label)
        {
           $exp_label = explode('_',$label);
           $leb = '';
           foreach ($exp_label as $value) {
              $leb .=$value.' ';
           }
           return ucwords(str_replace('-',' ',$leb));
        }
    }

    if (!function_exists('short_string')) {
        function short_string($str,$max=30)
        { 
            if (strlen($str) < $max) return $str;
            return substr($str, 0, $max).'...';
        }
    }

    if (!function_exists('get_rating_percentage')) {
        function get_rating_percentage($rate, $total=5) {
            // the rating is up to 5 stars, so the rate i will pass should return the percentage over 100 of the total
            return ($rate/$total) * 100;
        }
    }

    if (!function_exists('human_readable_file_size')) {
       function human_readable_file_size($bytes, $decimals = 2) {
           $sz = 'BKMGTP';
           $factor = floor((strlen($bytes) - 1) / 3);
           return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
           }
       }

       if (!function_exists('log_system_errors')) {
        function log_system_errors(Exception|Throwable $e) {
            Log::channel('error_log')->error($e->getMessage(), ['trace' => $e->getTraceAsString()]);
         }
       }

       if (!function_exists('log_activities')) {
         /**
         * ["new sale", "repayment" ]
        **/
        function log_activities($user_id, $description, $data=[]) {

           $details = log_details($description, json_encode($data));
           $ip_address = (is_array($data) && isset($data['ip']) ? $data['ip'] : safe_array_access($_SERVER,['REMOTE_ADDR']));
           $log = new ActivityLog;
           $log->user_id = $user_id;
           $log->ip_address = $ip_address;
           $log->description = $description;
           $log->details = $details;
           $log->save();

         }
       }


       if (!function_exists('status_name')) {
        function status_name($name=null)
        {
          $name = strtoupper($name);
          $statuses = [
            'PENDING' => 'pending',
            'NOT_SUBMITTED' => 'not_submitted',
            'CANCELLED' => 'cancelled',
            'CLOSED' => 'closed',
            'COMPLETED' => 'completed',
            'ACCEPTED' => 'accepted',
            'ACTIVE' => 'active',
            'CONSENTED' => 'consented',
            'SUBMITTED' => 'submitted',
            'APPROVED' => 'approved',
            'APPROVED_FOR' => 'approved_for',
            'APPROVE_FOR' => 'approve_for',
            'DECLINED' => 'declined',
            'DECLINED_FOR' => 'declined_for',
            'REJECTED' => 'rejected',
            'DISPUTED' => 'disputed',
            'FORWARDED' => 'forwarded',
            'RELEASED' => 'released',
            'PAID' => 'paid',
            'PART_PAID' => 'part_paid',
            'CREDIT' => 'credit',
            'DELIVERED' => 'delivered',
            'RECEIVED' => 'received',
            'SCANNED' => 'scanned',
            'AWAITING' => 'awaiting',
            'READ' => 'read',
            'REVIEW' => 'review',
            'RETURNED' => 'returned',
            'SHIPPED' => 'shipped',
            'IN_TRANSIT' => 'in_transit',
            'IN_STOCK' => 'in_stock',
            'OUT_OF_STOCK' => 'out_of_stock',
            'PICKED' => 'picked',
            'DISPATCHED' => 'dispatched',
            'MOVED' => 'moved',
          ];
          if ($name) {
            return isset($statuses[$name]) ? $statuses[$name] : null;
          }else{
            return $statuses;
          }
        }
       }



       if (!function_exists('message_types')) {
        function message_types($name=null)
        {
          $name = strtoupper($name);
          $statuses = [
            'ANNOUNCEMENT' => 'announcement',
            'ALERT' => 'alert',
            'SUCCESS' => 'success',
            'ERROR' => 'error',
            'INFO' => 'info',
            'EMAIL' => 'email',
            'ACTION' => 'action',
          ];
          if ($name) {
            return isset($statuses[$name]) ? $statuses[$name] : null;
          }else{
            return $statuses['ALERT'];
          }
        }
       }


     if (!function_exists('contract_years')) {
        function contract_years()
        {
          // get from last 5 year to next 10 years in array
          $current_year = (int)date('Y');
          $years = [];
          for ($i=$current_year-5; $i <= $current_year+10; $i++) {
            $years[] = $i;
          }
          return $years;
        }
      }

      if (!function_exists('get_quarters_dates')) {
        function get_quarters_dates() {
        $currentYear = date("Y"); // Get the current year
                return [
                    [
                        'label' => 'Quarter One',
                        'value' => $currentYear."-01-01",
                    ],
                    [
                        'label' => 'Quarter Two',
                        'value' => $currentYear."-04-01",
                    ],
                    [
                        'label' => 'Quarter Three',
                        'value' => $currentYear."-07-01",
                    ],
                    [
                        'label' => 'Quarter Four',
                        'value' => $currentYear."-10-01",
                    ]
                ];
            }
        }
    
       if (!function_exists('status_color')) {
        function status_color($status)
        {
            switch ($status) {
                case (status_name()['PENDING']):
                    return 'slate';
                case status_name()['CONSENTED']:
                    return 'blue';
                case status_name()['FORWARDED']:
                    return 'secondary';
                case status_name()['NOT_SUBMITTED']:
                    return 'cyan';
                case status_name()['APPROVED']:
                    return 'green';
                case status_name()['DELIVERED']:
                    return 'blue';
                case status_name()['COMPLETED']:
                    return 'green';
                case status_name()['REJECTED']:
                    return 'red';
                case status_name()['DECLINED']:
                    return 'red';
                case status_name()['DECLINED_FOR']:
                    return 'red';
                case status_name()['CANCELLED']:
                    return 'red';
                case status_name()['PAID']:
                    return 'blue';
                case status_name()['ACTIVE']:
                    return 'cyan';
                case status_name()['SUBMITTED']:
                    return 'cyan';
                case status_name()['PART_PAID']:
                    return 'secondary';
                case status_name()['CREDIT']:
                    return 'amber';
                case status_name()['REVIEW']:
                    return 'amber';
                case status_name()['DISPUTED']:
                    return 'amber';
                case status_name()['IN_TRANSIT']:
                    return 'amber';
                default:
                   return 'primary';
            }
        }
       }

      
       if (!function_exists('log_details')) {
        
        function log_details($details,$data)
        {
            switch ($details) {
                case "new sale":
                    return 'made new sale : '. $data;
                case "repayment":
                    return 'made a sale repayment : '.$data;
                default:
                   return 'Performed system activity with no details : '.$data;
            }
        }
       }

       if (!function_exists('safe_array_access')) {
        function safe_array_access($array, array $keys=[]) {
         $value = $array;
         foreach ($keys as $key) {
             $key = trim($key, "'\"");
                 if (isset($value[$key])) {
                     $value = $value[$key];
                 } else {
                     return null; // Return null if any key is missing
                 }
             }
             return $value;
         }
     }


if (!function_exists('time_ago')) {
    function time_ago($datetime): string {
        $timestamp = strtotime($datetime);
        $dateTime = new DateTime();
        $dateTime->setTimestamp($timestamp);
        $currentDate = new DateTime();

        $diff = $currentDate->diff($dateTime);

        if ($diff->y > 0) {
            return $diff->y . ' year' . ($diff->y > 1 ? 's' : '') . ' ago';
        } elseif ($diff->m > 0) {
            return $diff->m . ' month' . ($diff->m > 1 ? 's' : '') . ' ago';
        } elseif ($diff->d > 0) {
            return $diff->d . ' day' . ($diff->d > 1 ? 's' : '') . ' ago';
        } elseif ($diff->h > 0) {
            return $diff->h . ' hour' . ($diff->h > 1 ? 's' : '') . ' ago';
        } elseif ($diff->i > 0) {
            return $diff->i . ' minute' . ($diff->i > 1 ? 's' : '') . ' ago';
        } else {
            return 'Just now';
        }
    }
}

if (!function_exists('number_to_words')) {
    function number_to_words($number) {
        $units = ["", "One", "Two", "Three", "Four", "Five", "Six", "Seven", "Eight", "Nine"];
        $teens = ["", "Eleven", "Twelve", "Thirteen", "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eighteen", "Nineteen"];
        $tens = ["", "Ten", "Twenty", "Thirty", "Forty", "Fifty", "Sixty", "Seventy", "Eighty", "Ninety"];
        $thousands = ["", "Thousand", "Million"];

        if ($number < 10) return $units[$number];
        if ($number < 20) return $teens[$number - 10];
        if ($number < 100) return $tens[intval($number / 10)] . ($number % 10 !== 0 ? " " . $units[$number % 10] : "");
        if ($number < 1000) return $units[intval($number / 100)] . " Hundred" . ($number % 100 !== 0 ? " and " . number_to_words($number % 100) : "");
        if ($number < 1000000) {
            $prefix = number_to_words(intval($number / 1000)) . " " . $thousands[1];
            $suffix = $number % 1000;
            if ($suffix) {
                return $prefix . " " . number_to_words($suffix);
            } else {
                return $prefix;
            }
        }
        if ($number == 1000000) return "One " . $thousands[2];

        return "Number out of range";
    }
}


if (!function_exists('get_segmented_url')) {
    /**
     * @return string
     */
    function get_segmented_url($segmeted_request)
    {
    $url = '/';
    $slash='/';
    foreach($segmeted_request as $k=>$s){
     if($k==0 && $s==dynamic_page_prefix()){continue;}
     if(end($segmeted_request)==$s){$slash='';}
      $url.=$s.$slash;
    }
    return $url;
   }
}
