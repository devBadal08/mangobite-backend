<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // First, get all category IDs by name
        $categories = DB::table('categories')->pluck('id', 'name');

        $menuItems = [

            // ==========================================
            // 1. Cold & Hot
            // ==========================================
            ['category' => 'Cold & Hot', 'menu_name' => 'Masala Tea', 'price' => 30],
            ['category' => 'Cold & Hot', 'menu_name' => 'Green Tea', 'price' => 40],
            ['category' => 'Cold & Hot', 'menu_name' => 'Lemon Tea', 'price' => 40],
            ['category' => 'Cold & Hot', 'menu_name' => 'Black Coffee', 'price' => 50],
            ['category' => 'Cold & Hot', 'menu_name' => 'Hot Coffee', 'price' => 60],
            ['category' => 'Cold & Hot', 'menu_name' => 'Cold Coffee', 'price' => 90],
            ['category' => 'Cold & Hot', 'menu_name' => 'Cold Coffee With Ice Cream', 'price' => 120],
            ['category' => 'Cold & Hot', 'menu_name' => 'Hot Chocolate', 'price' => 80],
            ['category' => 'Cold & Hot', 'menu_name' => 'Hot Badam Milk', 'price' => 80],
            ['category' => 'Cold & Hot', 'menu_name' => 'Cold Badam Milk', 'price' => 90],
            ['category' => 'Cold & Hot', 'menu_name' => 'Filter Coffee', 'price' => 70],
            ['category' => 'Cold & Hot', 'menu_name' => 'Cappuccino', 'price' => 90],
            ['category' => 'Cold & Hot', 'menu_name' => 'Latte', 'price' => 100],

            // ==========================================
            // 2. Papad & Fries
            // ==========================================
            ['category' => 'Papad & Fries', 'menu_name' => 'Roasted Papad', 'price' => 30],
            ['category' => 'Papad & Fries', 'menu_name' => 'Masala Papad', 'price' => 60],
            ['category' => 'Papad & Fries', 'menu_name' => 'Fryums', 'price' => 60],
            ['category' => 'Papad & Fries', 'menu_name' => 'French Fries', 'price' => 120],
            ['category' => 'Papad & Fries', 'menu_name' => 'Peri Peri Fries', 'price' => 140],
            ['category' => 'Papad & Fries', 'menu_name' => 'Cheese Fries', 'price' => 160],
            ['category' => 'Papad & Fries', 'menu_name' => 'Loaded Cheese Fries', 'price' => 180],

            // ==========================================
            // 3. Chinese Soup
            // ==========================================
            ['category' => 'Chinese Soup', 'menu_name' => 'Veg Clear Soup', 'price' => 100],
            ['category' => 'Chinese Soup', 'menu_name' => 'Veg Sweet Corn Soup', 'price' => 110],
            ['category' => 'Chinese Soup', 'menu_name' => 'Hot & Sour Soup', 'price' => 110],
            ['category' => 'Chinese Soup', 'menu_name' => 'Manchow Soup', 'price' => 120],
            ['category' => 'Chinese Soup', 'menu_name' => 'Tomato Soup', 'price' => 100],
            ['category' => 'Chinese Soup', 'menu_name' => 'Cream of Mushroom Soup', 'price' => 130],
            ['category' => 'Chinese Soup', 'menu_name' => 'Lemon Coriander Soup', 'price' => 110],
            ['category' => 'Chinese Soup', 'menu_name' => 'Talumein Soup', 'price' => 120],

            // ==========================================
            // 4. Salad & Raita
            // ==========================================
            ['category' => 'Salad & Raita', 'menu_name' => 'Green Salad', 'price' => 60],
            ['category' => 'Salad & Raita', 'menu_name' => 'Russian Salad', 'price' => 100],
            ['category' => 'Salad & Raita', 'menu_name' => 'Fruit Salad', 'price' => 120],
            ['category' => 'Salad & Raita', 'menu_name' => 'Boondi Raita', 'price' => 60],
            ['category' => 'Salad & Raita', 'menu_name' => 'Mix Veg Raita', 'price' => 70],
            ['category' => 'Salad & Raita', 'menu_name' => 'Pineapple Raita', 'price' => 80],
            ['category' => 'Salad & Raita', 'menu_name' => 'Cucumber Raita', 'price' => 60],

            // ==========================================
            // 5. Chinese Starter
            // ==========================================
            ['category' => 'Chinese Starter', 'menu_name' => 'Veg Manchurian Dry', 'price' => 180],
            ['category' => 'Chinese Starter', 'menu_name' => 'Veg Manchurian Gravy', 'price' => 190],
            ['category' => 'Chinese Starter', 'menu_name' => 'Paneer Chilli Dry', 'price' => 220],
            ['category' => 'Chinese Starter', 'menu_name' => 'Paneer Chilli Gravy', 'price' => 230],
            ['category' => 'Chinese Starter', 'menu_name' => 'Crispy Corn', 'price' => 180],
            ['category' => 'Chinese Starter', 'menu_name' => 'Spring Roll', 'price' => 160],
            ['category' => 'Chinese Starter', 'menu_name' => 'Veg 65', 'price' => 170],
            ['category' => 'Chinese Starter', 'menu_name' => 'Honey Chilli Potato', 'price' => 180],
            ['category' => 'Chinese Starter', 'menu_name' => 'Paneer 65', 'price' => 220],
            ['category' => 'Chinese Starter', 'menu_name' => 'Mushroom Chilli', 'price' => 200],
            ['category' => 'Chinese Starter', 'menu_name' => 'Gobi Manchurian Dry', 'price' => 170],
            ['category' => 'Chinese Starter', 'menu_name' => 'Baby Corn Chilli', 'price' => 190],
            ['category' => 'Chinese Starter', 'menu_name' => 'Crispy Vegetable', 'price' => 170],
            ['category' => 'Chinese Starter', 'menu_name' => 'Dragon Paneer', 'price' => 240],
            ['category' => 'Chinese Starter', 'menu_name' => 'Schezwan Paneer Dry', 'price' => 230],

            // ==========================================
            // 6. Tandoori Khajana
            // ==========================================
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Paneer Tikka', 'price' => 250],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Malai Paneer Tikka', 'price' => 270],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Achari Paneer Tikka', 'price' => 260],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Mushroom Tikka', 'price' => 230],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Hara Bhara Kebab', 'price' => 200],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Veg Seekh Kebab', 'price' => 210],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Tandoori Aloo', 'price' => 180],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Paneer Shashlik', 'price' => 280],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Tandoori Platter', 'price' => 350],
            ['category' => 'Tandoori Khajana', 'menu_name' => 'Soya Chaap Tikka', 'price' => 220],

            // ==========================================
            // 7. Pasta
            // ==========================================
            ['category' => 'Pasta', 'menu_name' => 'White Sauce Pasta', 'price' => 180],
            ['category' => 'Pasta', 'menu_name' => 'Red Sauce Pasta', 'price' => 170],
            ['category' => 'Pasta', 'menu_name' => 'Pink Sauce Pasta', 'price' => 190],
            ['category' => 'Pasta', 'menu_name' => 'Arrabiata Pasta', 'price' => 190],
            ['category' => 'Pasta', 'menu_name' => 'Alfredo Pasta', 'price' => 200],
            ['category' => 'Pasta', 'menu_name' => 'Mac & Cheese Pasta', 'price' => 210],
            ['category' => 'Pasta', 'menu_name' => 'Pesto Pasta', 'price' => 200],

            // ==========================================
            // 8. Baked Dish
            // ==========================================
            ['category' => 'Baked Dish', 'menu_name' => 'Baked Macaroni', 'price' => 200],
            ['category' => 'Baked Dish', 'menu_name' => 'Baked Veg Au Gratin', 'price' => 220],
            ['category' => 'Baked Dish', 'menu_name' => 'Baked Lasagna', 'price' => 230],
            ['category' => 'Baked Dish', 'menu_name' => 'Baked Cheese Nachos', 'price' => 200],
            ['category' => 'Baked Dish', 'menu_name' => 'Baked Stuffed Mushroom', 'price' => 240],

            // ==========================================
            // 9. Noodles
            // ==========================================
            ['category' => 'Noodles', 'menu_name' => 'Veg Hakka Noodles', 'price' => 160],
            ['category' => 'Noodles', 'menu_name' => 'Schezwan Noodles', 'price' => 170],
            ['category' => 'Noodles', 'menu_name' => 'Singapore Noodles', 'price' => 180],
            ['category' => 'Noodles', 'menu_name' => 'Triple Schezwan Noodles', 'price' => 200],
            ['category' => 'Noodles', 'menu_name' => 'Paneer Noodles', 'price' => 190],
            ['category' => 'Noodles', 'menu_name' => 'Mushroom Noodles', 'price' => 180],
            ['category' => 'Noodles', 'menu_name' => 'Chilli Garlic Noodles', 'price' => 170],

            // ==========================================
            // 10. Chinese Rice
            // ==========================================
            ['category' => 'Chinese Rice', 'menu_name' => 'Veg Fried Rice', 'price' => 160],
            ['category' => 'Chinese Rice', 'menu_name' => 'Schezwan Fried Rice', 'price' => 170],
            ['category' => 'Chinese Rice', 'menu_name' => 'Singapore Rice', 'price' => 180],
            ['category' => 'Chinese Rice', 'menu_name' => 'Triple Schezwan Rice', 'price' => 200],
            ['category' => 'Chinese Rice', 'menu_name' => 'Paneer Fried Rice', 'price' => 190],
            ['category' => 'Chinese Rice', 'menu_name' => 'Mushroom Fried Rice', 'price' => 180],
            ['category' => 'Chinese Rice', 'menu_name' => 'Manchurian Rice', 'price' => 180],

            // ==========================================
            // 11. Pizza
            // ==========================================
            ['category' => 'Pizza', 'menu_name' => 'Margherita Pizza', 'price' => 180],
            ['category' => 'Pizza', 'menu_name' => 'Veg Supreme Pizza', 'price' => 230],
            ['category' => 'Pizza', 'menu_name' => 'Paneer Tikka Pizza', 'price' => 250],
            ['category' => 'Pizza', 'menu_name' => 'Corn & Cheese Pizza', 'price' => 220],
            ['category' => 'Pizza', 'menu_name' => 'Mushroom Pizza', 'price' => 220],
            ['category' => 'Pizza', 'menu_name' => 'Farm House Pizza', 'price' => 240],
            ['category' => 'Pizza', 'menu_name' => 'Mexican Pizza', 'price' => 240],
            ['category' => 'Pizza', 'menu_name' => 'Cheese Burst Pizza', 'price' => 260],

            // ==========================================
            // 12. Sandwich
            // ==========================================
            ['category' => 'Sandwich', 'menu_name' => 'Veg Toast Sandwich', 'price' => 80],
            ['category' => 'Sandwich', 'menu_name' => 'Veg Grilled Sandwich', 'price' => 100],
            ['category' => 'Sandwich', 'menu_name' => 'Cheese Grilled Sandwich', 'price' => 130],
            ['category' => 'Sandwich', 'menu_name' => 'Paneer Tikka Sandwich', 'price' => 150],
            ['category' => 'Sandwich', 'menu_name' => 'Bombay Masala Sandwich', 'price' => 120],
            ['category' => 'Sandwich', 'menu_name' => 'Veg Club Sandwich', 'price' => 160],
            ['category' => 'Sandwich', 'menu_name' => 'Chocolate Sandwich', 'price' => 110],
            ['category' => 'Sandwich', 'menu_name' => 'Mayo Cheese Sandwich', 'price' => 140],

            // ==========================================
            // 13. Burger
            // ==========================================
            ['category' => 'Burger', 'menu_name' => 'Veg Burger', 'price' => 100],
            ['category' => 'Burger', 'menu_name' => 'Cheese Burger', 'price' => 130],
            ['category' => 'Burger', 'menu_name' => 'Paneer Burger', 'price' => 150],
            ['category' => 'Burger', 'menu_name' => 'Aloo Tikki Burger', 'price' => 110],
            ['category' => 'Burger', 'menu_name' => 'Mexican Burger', 'price' => 140],
            ['category' => 'Burger', 'menu_name' => 'Jumbo Burger', 'price' => 170],
            ['category' => 'Burger', 'menu_name' => 'Crispy Veg Burger', 'price' => 120],

            // ==========================================
            // 14. Special Sizzler
            // ==========================================
            ['category' => 'Special Sizzler', 'menu_name' => 'Paneer Sizzler', 'price' => 300],
            ['category' => 'Special Sizzler', 'menu_name' => 'Chinese Sizzler', 'price' => 280],
            ['category' => 'Special Sizzler', 'menu_name' => 'Mexican Sizzler', 'price' => 300],
            ['category' => 'Special Sizzler', 'menu_name' => 'Italian Sizzler', 'price' => 320],
            ['category' => 'Special Sizzler', 'menu_name' => 'Veg Supreme Sizzler', 'price' => 350],
            ['category' => 'Special Sizzler', 'menu_name' => 'Mango Bite Special Sizzler', 'price' => 400],

            // ==========================================
            // 15. Kathiyawadi
            // ==========================================
            ['category' => 'Kathiyawadi', 'menu_name' => 'Sev Tameta Nu Shaak', 'price' => 160],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Ringna Bataka Nu Shaak', 'price' => 160],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Bhinda Masala', 'price' => 170],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Karela Masala', 'price' => 160],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Methi Gota', 'price' => 150],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Undhiyu', 'price' => 220],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Kathiyawadi Kadhi', 'price' => 130],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Valor Papdi Nu Shaak', 'price' => 170],
            ['category' => 'Kathiyawadi', 'menu_name' => 'Tindora Masala', 'price' => 160],

            // ==========================================
            // 16. Indian Veg Garden
            // ==========================================
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Mix Veg Curry', 'price' => 170],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Aloo Gobi', 'price' => 160],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Aloo Matar', 'price' => 150],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Bhindi Masala', 'price' => 170],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Veg Kolhapuri', 'price' => 190],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Veg Jalfrezi', 'price' => 180],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Veg Handi', 'price' => 200],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Mushroom Masala', 'price' => 200],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Baby Corn Masala', 'price' => 190],
            ['category' => 'Indian Veg Garden', 'menu_name' => 'Veg Kadai', 'price' => 180],

            // ==========================================
            // 17. Indian Paneer Surprise
            // ==========================================
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Butter Masala', 'price' => 230],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Shahi Paneer', 'price' => 230],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Kadai Paneer', 'price' => 220],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Tikka Masala', 'price' => 250],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Palak Paneer', 'price' => 210],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Lababdar', 'price' => 240],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Do Pyaza', 'price' => 220],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Bhurji', 'price' => 200],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Paneer Pasanda', 'price' => 250],
            ['category' => 'Indian Paneer Surprise', 'menu_name' => 'Matar Paneer', 'price' => 210],

            // ==========================================
            // 18. Kofta Curry
            // ==========================================
            ['category' => 'Kofta Curry', 'menu_name' => 'Malai Kofta', 'price' => 220],
            ['category' => 'Kofta Curry', 'menu_name' => 'Paneer Kofta', 'price' => 230],
            ['category' => 'Kofta Curry', 'menu_name' => 'Veg Kofta', 'price' => 200],
            ['category' => 'Kofta Curry', 'menu_name' => 'Nargisi Kofta', 'price' => 230],
            ['category' => 'Kofta Curry', 'menu_name' => 'Lauki Kofta', 'price' => 200],
            ['category' => 'Kofta Curry', 'menu_name' => 'Shahi Kofta', 'price' => 240],

            // ==========================================
            // 19. Kaju & Cheese Curry
            // ==========================================
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Kaju Curry', 'price' => 260],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Kaju Paneer', 'price' => 270],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Kaju Masala', 'price' => 260],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Cheese Curry', 'price' => 240],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Navratan Korma', 'price' => 230],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Cheese Tomato Curry', 'price' => 240],
            ['category' => 'Kaju & Cheese Curry', 'menu_name' => 'Kaju Cheese Masala', 'price' => 280],

            // ==========================================
            // 20. Indian Tandoori Roti
            // ==========================================
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Tandoori Roti', 'price' => 30],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Butter Roti', 'price' => 40],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Plain Naan', 'price' => 40],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Butter Naan', 'price' => 50],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Garlic Naan', 'price' => 60],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Cheese Naan', 'price' => 80],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Paneer Naan', 'price' => 80],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Missi Roti', 'price' => 50],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Laccha Paratha', 'price' => 50],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Aloo Paratha', 'price' => 70],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Gobi Paratha', 'price' => 70],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Paneer Paratha', 'price' => 80],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Rumali Roti', 'price' => 40],
            ['category' => 'Indian Tandoori Roti', 'menu_name' => 'Kulcha', 'price' => 50],

            // ==========================================
            // 21. Dal
            // ==========================================
            ['category' => 'Dal', 'menu_name' => 'Dal Tadka', 'price' => 150],
            ['category' => 'Dal', 'menu_name' => 'Dal Fry', 'price' => 150],
            ['category' => 'Dal', 'menu_name' => 'Dal Makhani', 'price' => 190],
            ['category' => 'Dal', 'menu_name' => 'Panchmel Dal', 'price' => 170],
            ['category' => 'Dal', 'menu_name' => 'Yellow Dal', 'price' => 130],
            ['category' => 'Dal', 'menu_name' => 'Masoor Dal', 'price' => 140],
            ['category' => 'Dal', 'menu_name' => 'Dal Palak', 'price' => 160],

            // ==========================================
            // 22. Rice
            // ==========================================
            ['category' => 'Rice', 'menu_name' => 'Steamed Rice', 'price' => 100],
            ['category' => 'Rice', 'menu_name' => 'Jeera Rice', 'price' => 120],
            ['category' => 'Rice', 'menu_name' => 'Veg Pulao', 'price' => 150],
            ['category' => 'Rice', 'menu_name' => 'Veg Biryani', 'price' => 180],
            ['category' => 'Rice', 'menu_name' => 'Paneer Biryani', 'price' => 200],
            ['category' => 'Rice', 'menu_name' => 'Kashmiri Pulao', 'price' => 180],
            ['category' => 'Rice', 'menu_name' => 'Matar Pulao', 'price' => 140],
            ['category' => 'Rice', 'menu_name' => 'Curd Rice', 'price' => 120],

            // ==========================================
            // 23. Dosa
            // ==========================================
            ['category' => 'Dosa', 'menu_name' => 'Plain Dosa', 'price' => 100],
            ['category' => 'Dosa', 'menu_name' => 'Masala Dosa', 'price' => 120],
            ['category' => 'Dosa', 'menu_name' => 'Butter Masala Dosa', 'price' => 140],
            ['category' => 'Dosa', 'menu_name' => 'Cheese Dosa', 'price' => 150],
            ['category' => 'Dosa', 'menu_name' => 'Paneer Dosa', 'price' => 160],
            ['category' => 'Dosa', 'menu_name' => 'Mysore Dosa', 'price' => 140],
            ['category' => 'Dosa', 'menu_name' => 'Rava Dosa', 'price' => 130],
            ['category' => 'Dosa', 'menu_name' => 'Spring Roll Dosa', 'price' => 160],
            ['category' => 'Dosa', 'menu_name' => 'Schezwan Dosa', 'price' => 150],
            ['category' => 'Dosa', 'menu_name' => 'Paper Dosa', 'price' => 120],
            ['category' => 'Dosa', 'menu_name' => 'Onion Dosa', 'price' => 130],

            // ==========================================
            // 24. Uttapam
            // ==========================================
            ['category' => 'Uttapam', 'menu_name' => 'Plain Uttapam', 'price' => 100],
            ['category' => 'Uttapam', 'menu_name' => 'Onion Uttapam', 'price' => 120],
            ['category' => 'Uttapam', 'menu_name' => 'Tomato Uttapam', 'price' => 120],
            ['category' => 'Uttapam', 'menu_name' => 'Mixed Uttapam', 'price' => 140],
            ['category' => 'Uttapam', 'menu_name' => 'Cheese Uttapam', 'price' => 150],
            ['category' => 'Uttapam', 'menu_name' => 'Paneer Uttapam', 'price' => 160],

            // ==========================================
            // 25. Punjabi Fix Thali
            // ==========================================
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Mini Thali', 'price' => 200],
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Punjabi Thali', 'price' => 280],
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Special Thali', 'price' => 350],
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Royal Thali', 'price' => 450],
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Gujarati Thali', 'price' => 300],
            ['category' => 'Punjabi Fix Thali', 'menu_name' => 'Mango Bite Special Thali', 'price' => 500],

            // ==========================================
            // 26. Milkshake
            // ==========================================
            ['category' => 'Milkshake', 'menu_name' => 'Chocolate Milkshake', 'price' => 130],
            ['category' => 'Milkshake', 'menu_name' => 'Strawberry Milkshake', 'price' => 130],
            ['category' => 'Milkshake', 'menu_name' => 'Mango Milkshake', 'price' => 130],
            ['category' => 'Milkshake', 'menu_name' => 'Butterscotch Milkshake', 'price' => 130],
            ['category' => 'Milkshake', 'menu_name' => 'Vanilla Milkshake', 'price' => 120],
            ['category' => 'Milkshake', 'menu_name' => 'Oreo Milkshake', 'price' => 150],
            ['category' => 'Milkshake', 'menu_name' => 'KitKat Milkshake', 'price' => 150],
            ['category' => 'Milkshake', 'menu_name' => 'Rose Milkshake', 'price' => 120],
            ['category' => 'Milkshake', 'menu_name' => 'Dry Fruit Milkshake', 'price' => 160],

            // ==========================================
            // 27. Juice & Mocktail
            // ==========================================
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Fresh Lime Soda', 'price' => 60],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Fresh Lime Water', 'price' => 40],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Watermelon Juice', 'price' => 80],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Pineapple Juice', 'price' => 90],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Orange Juice', 'price' => 90],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Mango Juice', 'price' => 80],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Virgin Mojito', 'price' => 120],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Blue Lagoon', 'price' => 130],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Sunrise Mocktail', 'price' => 130],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Green Apple Mojito', 'price' => 130],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Mango Mojito', 'price' => 130],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Fruit Punch', 'price' => 120],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Sweet Lassi', 'price' => 70],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Mango Lassi', 'price' => 90],
            ['category' => 'Juice & Mocktail', 'menu_name' => 'Buttermilk (Chaas)', 'price' => 40],

            // ==========================================
            // 28. Dessert
            // ==========================================
            ['category' => 'Dessert', 'menu_name' => 'Gulab Jamun (2 Pcs)', 'price' => 60],
            ['category' => 'Dessert', 'menu_name' => 'Rasgulla (2 Pcs)', 'price' => 60],
            ['category' => 'Dessert', 'menu_name' => 'Vanilla Ice Cream', 'price' => 80],
            ['category' => 'Dessert', 'menu_name' => 'Chocolate Ice Cream', 'price' => 80],
            ['category' => 'Dessert', 'menu_name' => 'Butterscotch Ice Cream', 'price' => 80],
            ['category' => 'Dessert', 'menu_name' => 'Brownie With Ice Cream', 'price' => 150],
            ['category' => 'Dessert', 'menu_name' => 'Gajar Ka Halwa', 'price' => 100],
            ['category' => 'Dessert', 'menu_name' => 'Moong Dal Halwa', 'price' => 110],
            ['category' => 'Dessert', 'menu_name' => 'Fruit Custard', 'price' => 100],
            ['category' => 'Dessert', 'menu_name' => 'Kulfi (Malai)', 'price' => 70],
            ['category' => 'Dessert', 'menu_name' => 'Kulfi (Mango)', 'price' => 70],
            ['category' => 'Dessert', 'menu_name' => 'Hot Chocolate Fudge', 'price' => 160],
            ['category' => 'Dessert', 'menu_name' => 'Rasmalai (2 Pcs)', 'price' => 80],
        ];

        foreach ($menuItems as $item) {
            $categoryId = $categories[$item['category']] ?? null;

            if ($categoryId) {
                DB::table('menu_items')->updateOrInsert(
                    [
                        'category_id' => $categoryId,
                        'menu_name' => $item['menu_name'],
                    ],
                    [
                        'price' => $item['price'],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
