<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Burger',
                'description' => 'Juicy beef burger with lettuce, tomato, and cheese.',
                'price' => 8.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pasta',
                'description' => 'Penne pasta with creamy Alfredo sauce.',
                'price' => 10.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Burrito',
                'description' => 'Flour tortilla filled with beans, rice, and chicken.',
                'price' => 9.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Salad',
                'description' => 'Grilled chicken with fresh greens and vinaigrette.',
                'price' => 7.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fish & Chips',
                'description' => 'Crispy battered fish with fries.',
                'price' => 11.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Veggie Wrap',
                'description' => 'Whole wheat wrap with grilled vegetables.',
                'price' => 7.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chicken Wings',
                'description' => 'Spicy buffalo chicken wings.',
                'price' => 8.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caesar Salad',
                'description' => 'Romaine lettuce, croutons, and Caesar dressing.',
                'price' => 6.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'BBQ Ribs',
                'description' => 'Tender pork ribs with BBQ sauce.',
                'price' => 13.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Falafel Plate',
                'description' => 'Falafel balls with hummus and pita.',
                'price' => 8.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Club Sandwich',
                'description' => 'Triple-decker sandwich with turkey, bacon, and lettuce.',
                'price' => 9.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Greek Salad',
                'description' => 'Salad with feta cheese, olives, and tomatoes.',
                'price' => 7.00,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cheesecake',
                'description' => 'Creamy cheesecake with a graham cracker crust.',
                'price' => 5.50,
                'type' => 'food',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fruit Smoothie',
                'description' => 'Blended fresh fruits with yogurt.',
                'price' => 4.50,
                'type' => 'drink',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Iced Tea',
                'description' => 'Refreshing cold tea with lemon.',
                'price' => 2.50,
                'type' => 'drink',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
