<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Cold & Hot', 'image' => 'categories/cold_hot.jpg'],
            ['name' => 'Papad & Fries', 'image' => 'categories/papad_fries.jpg'],
            ['name' => 'Chinese Soup', 'image' => 'categories/chinese_soup.jpg'],
            ['name' => 'Salad & Raita', 'image' => 'categories/salad_raita.jpg'],
            ['name' => 'Chinese Starter', 'image' => 'categories/chinese_starter.jpg'],
            ['name' => 'Tandoori Khajana', 'image' => 'categories/tandoori_khajana.jpg'],
            ['name' => 'Pasta', 'image' => 'categories/pasta.jpg'],
            ['name' => 'Baked Dish', 'image' => 'categories/baked_dish.jpg'],
            ['name' => 'Noodles', 'image' => 'categories/noodles.jpg'],
            ['name' => 'Chinese Rice', 'image' => 'categories/chinese_rice.jpg'],
            ['name' => 'Pizza', 'image' => 'categories/pizza.jpg'],
            ['name' => 'Sandwich', 'image' => 'categories/sandwich.jpg'],
            ['name' => 'Burger', 'image' => 'categories/burger.jpg'],
            ['name' => 'Special Sizzler', 'image' => 'categories/special_sizzler.jpg'],
            ['name' => 'Kathiyawadi', 'image' => 'categories/kathiyawadi.jpg'],
            ['name' => 'Indian Veg Garden', 'image' => 'categories/indian_veg_garden.jpg'],
            ['name' => 'Indian Paneer Surprise', 'image' => 'categories/indian_paneer_surprise.jpg'],
            ['name' => 'Kofta Curry', 'image' => 'categories/kofta_curry.jpg'],
            ['name' => 'Kaju & Cheese Curry', 'image' => 'categories/kaju_cheese_curry.jpg'],
            ['name' => 'Indian Tandoori Roti', 'image' => 'categories/indian_tandoori_roti.jpg'],
            ['name' => 'Dal', 'image' => 'categories/dal.jpg'],
            ['name' => 'Rice', 'image' => 'categories/rice.jpg'],
            ['name' => 'Dosa', 'image' => 'categories/dosa.jpg'],
            ['name' => 'Uttapam', 'image' => 'categories/uttapam.jpg'],
            ['name' => 'Punjabi Fix Thali', 'image' => 'categories/punjabi_fix_thali.jpg'],
            ['name' => 'Milkshake', 'image' => 'categories/milkshake.jpg'],
            ['name' => 'Juice & Mocktail', 'image' => 'categories/juice_mocktail.jpg'],
            ['name' => 'Dessert', 'image' => 'categories/dessert.jpg'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->updateOrInsert(
                ['name' => $category['name']], // check condition
                [
                    'image' => $category['image'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            );
        }
    }
}
