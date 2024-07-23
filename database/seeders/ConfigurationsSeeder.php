<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Company;
use App\Models\Configurations\Configuration;
use App\Models\FoodItem;
use App\Models\Slider;
use App\Models\Store;
use App\Models\Transaction;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigurationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Settings
        $settings = [
            'app_name' => [ 'option_value' => 'Cravings Africa', 'input_type' => 'text', 'sort'=>1 ],
            'title' => [ 'option_value' => 'Cravings Africa', 'input_type' => 'text', 'sort'=>2 ],
            'app_short_name' => [ 'option_value' => 'CA', 'input_type' => 'text', 'sort'=>3 ],
            'company_name' => [ 'option_value' => 'Cravings Africa', 'input_type' => 'text', 'sort'=>4 ],
            'top_message' => [ 'option_value' => 'FREE Express Delivery On Orders £100+', 'input_type' => 'text', 'sort'=>5 ],
            'favicon' => [ 'option_value' => '/assets/images/Cravingslogo.png', 'input_type' => 'file', 'sort'=>5 ],
            'logo' => [ 'option_value' => '/assets/images/Cravingslogo.png', 'input_type' => 'file', 'sort'=>4 ],
            'opening_hours' => [ 'option_value' => '12:00PM - 10:00PM','input_type' => 'text', 'sort'=>6 ],
            'author_image' => [ 'option_value' => '/assets/images/Cravingslogo.png', 'input_type' => 'file', 'sort'=>20 ],
            'main_og' => [ 'option_value' => '/assets/images/Cravingslogo.png', 'input_type' => 'file', 'sort'=>20 ],
            'phone_number' => [ 'option_value' => '0247207085', 'input_type' => 'text', 'sort'=>20 ],
            'whatsapp_number' => [ 'option_value' => '0598638224', 'input_type' => 'text', 'sort'=>20 ],
            'address' => [ 'option_value' => 'Accra, Ghana', 'input_type' => 'text', 'sort'=>20 ],
            'country' => [ 'option_value' => 'Ghana', 'input_type' => 'text', 'sort'=>20 ],
            'keywords' => [ 'option_value' => 'Eat, Food, Cravings, Africa, Local Dish, Cravings Africa', 'input_type' => 'text', 'sort'=>20 ],
            'author' => [ 'option_value' => 'Cravings Africa', 'input_type' => 'text', 'sort'=>20 ],
            'description' => [ 'option_value' => 'Cravings Africa COMPANY LTD', 'input_type' => 'text', 'sort'=>20 ],
            'email' => [ 'option_value' => 'support@cravings-africa.com', 'input_type' => 'text', 'sort'=>20 ],
            'facebook' => [ 'option_value' => 'http://www.facebook.com/cravings-africa', 'input_type' => 'text', 'sort'=>20 ],
            'twitter'=> [ 'option_value' => 'https://twitter.com/cravings-africa', 'input_type' => 'text', 'sort'=>20 ],
            'instagram'=> [ 'option_value' => 'https://www.instagram.com/cravings-africa', 'input_type' => 'text', 'sort'=>20 ],
            'youtube' => [ 'option_value' => 'http://www.youtube.com/cravings-africa', 'input_type' => 'text', 'sort'=>20 ],
            'linkedin' => [ 'option_value' => 'https://www.linkedin.com/cravings-africa', 'input_type' => 'text', 'sort'=>20 ],
            'time_zone' => [ 'option_value' => 'Africa/Accra', 'input_type' => 'text', 'sort'=>20 ],
            'date_format' => [ 'option_value' => 'd-M-Y', 'input_type' => 'text', 'sort'=>20 ],
            'currency'=> [ 'option_value' => 'GBP', 'input_type' => 'text', 'sort'=>20 ],
            'currency_symbol'=> [ 'option_value' => '₵', 'input_type' => 'text', 'sort'=>20 ],
        ];

        foreach ($settings as $key => $value)
        {
            if ($conf=Configuration::where('option_key',$key)->first()) {
               $conf->option_value = $value['option_value'];
               $conf->input_type = $value['input_type'];
               $conf->sort = $value['sort'];
               $conf->save();
            }else{
                Configuration::insert([
                    'option_key' => $key,
                    'option_value' => $value['option_value'], 
                    'input_type' => $value['input_type'],
                    'sort' => $value['sort'],
                   ]);
            }
        }

        // seed admin user

        if(!User::where('username','admin')->first()) {
            $user = new User;
            $user->name = 'Admin';
            $user->username = 'admin';
            $user->is_active = true;
            $user->password = Hash::make('123');
            $user->save();
        }else{
            $user = User::where('username','admin')->first();
        }

            // create admin role , assign permission called admin and sync the role with user
            // create admin role
            $adminRole = Role::where('name','admin')->first();
            if (!$adminRole) {
                $adminRole = Role::create([
                    'name' => 'admin',
                    // 'company_id' => $company->id
                ]);
            }
            $adminPermission = Permission::where('name','admin')->first();
            if (!$adminPermission) {
                    // create admin permission
                $adminPermission = Permission::create([
                    'name' => 'admin',
                ]);
            }
            // assign permission called admin to the admin role
            $adminRole->givePermissionTo($adminPermission);

            // sync the admin role with the user
            $user->syncRoles($adminRole->name);

            $sores = [
                'UK' => [
                    'name' => 'UK - Telford (TF2 0AS)',
                    'map_link' => "https://www.google.com/maps/place/CravingsAfrica,+Unit+2+Fourth+Ave,+Telford+TF2+0AS/@52.6858439,-2.4520793,17z/data=!4m6!3m5!1s0x487a81142fadaa85:0xa9c4d49e4eb0d8be!8m2!3d52.6862353!4d-2.4518861!16s%2Fg%2F11h_zl4rdj?hl=en-us&amp;source=lnms",
                    'status' => 'active',
                ],
                'US' => [
                    'name' => 'US - New Jersey',
                    'map_link' => "",
                    'status' => 'inactive',
                ],
                'CN' => [
                    'name' => 'CN - Edmonton',
                    'map_link' => "",
                    'status' => 'inactive',
                ],
                'GH' => [
                    'name' => 'GH - Accra',
                    'map_link' => "",
                    'status' => 'inactive',
                ],
            ];

            foreach ($sores as $key => $value) {
                $store = Store::where('code', $key)->first();
                if (!$store) {
                    $store = Store::create([
                        'name' => $value['name'],
                        'code' => $key,
                        'map_link' => $value['map_link'],
                        'status' => $value['status'],
                    ]);
                }
            }

            // sliders

            $sliders = [
                '/assets/images/banners/slide.jpg',
                '/assets/images/banners/slide6.jpg',
            ];
            foreach ($sliders as $key => $value) {
                $store = Slider::where('image', $value)->first();
                if (!$store) {
                    $store = Slider::create([
                        'title' => (string) 'slider '.$key,
                        'image' => $value,
                        'status' => 'active',
                        'order' => $key+1,
                    ]);
                }
            }

            // banner 
            $banners = [
                '/assets/images/banners/drinks.jpg',
            ];
            foreach ($banners as $key => $value) {
                $store = Banner::where('image', $value)->first();
                if (!$store) {
                    $store = Banner::create([
                        'name' => (string) 'Drinks',
                        'image' => $value,
                        'status' => 'active',
                        'order' => $key+1,
                    ]);
                }
            }

            // Categories
            $categories = [
                'Starter',
                'OUR 5✯ MEALS',
            ];
            foreach ($categories as $key => $value) {
                $store = Category::where('name', $value)->first();
                if (!$store) {
                    $store = Category::create([
                        'name' => $value,
                        'order' => $key+1,
                    ]);
                }
            }

            $cat1 = Category::where('name', 'Starter')->first();
            // food items
            $foodItems1 =  [
                'Kebab'=>[
                    'image' => '/assets/images/food/kebab.webp',
                    'price' => 100,
                    'sku' => generate_unique_code(),
                    'rating' => 5,
                    'description' => 'this is a description for kebab',
                ],
                'Fried Chicken' => [
                    'image' => '/assets/images/food/friedchicken.jpg',
                    'price' => 40,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for fried chicken',
                ],
                'Spring Rolls' => [
                    'image' => '/assets/images/food/springrolls.jpg',
                    'price' => 10,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for kebab',
                ],
                'Kelewele' => [
                    'image' => '/assets/images/food/kelewele.jpeg',
                    'price' => 10,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for kelewele',
                ]
            ];




            foreach ($foodItems1 as $key => $value) {
                $store = FoodItem::where('name', $key)->first();
                if (!$store) {
                    $store = FoodItem::create([
                        'name' => $key,
                        'image' => $value['image'],
                        'price' => $value['price'],
                        'rating' => $value['rating'],
                        'sku' => $value['sku'],
                        'description' => $value['description'],
                    ]);
                    $store->syncCategories([$cat1->id]);
                }
            }


            // food items
            $cat2 = Category::where('name', 'OUR 5✯ MEALS')->first();
            $foodItems2 =  [
                'Jollof Rice' => [
                    'image' => '/assets/images/food/jollof.jpg',
                    'price' => 100,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for jollof rice',
                ],
                'Kenkey with Red Snapper Fish & Shrimps' => [
                    'image' => '/assets/images/food/kenkey.png',
                    'price' => 40,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for kenkey',
                ],
                'Fufu with Light Soup' => [
                    'image' => '/assets/images/food/fufu_lightsoup.jpg',
                    'price' => 10,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for fufu with light soup',
                ],
                'Boiled Yam with Palava Sauce' => [
                    'image' => '/assets/images/food/yam.png',
                    'price' => 15,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for boiled yam with palava sauce',
                ],
                'Quick View' => [
                    'image' => '/assets/images/food/banku-and-okra.jpg',
                    'price' => 10,
                    'rating' => 5,
                    'sku' => generate_unique_code(),
                    'description' => 'this is a description for banku and okra',
                ],
            ];

            foreach ($foodItems2 as $key => $value) {
                $store = FoodItem::where('name', $key)->first();
                if (!$store) {
                    $store = FoodItem::create([
                        'name' => $key,
                        'image' => $value['image'],
                        'price' => $value['price'],
                        'rating' => $value['rating'],
                        'sku' => $value['sku'],
                        'description' => $value['description'],
                    ]);
                    $store->syncCategories([$cat2->id]);
                }
            }
    }
}
