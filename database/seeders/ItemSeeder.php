<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            [
                'item_name' => 'Fresh Apple',
                'item_desc' => 'An apple is an edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.',
                'item_image_link' => 'items/apple-item.jpg',
                'price' => '10000',
            ],
            [
                'item_name' => 'Carrot',
                'item_desc' => 'This is a carrot. Good for your health!',
                'item_image_link' => 'items/carrot-item.jpg',
                'price' => '20000',
            ],
            [
                'item_name' => 'Orange',
                'item_desc' => 'Orange has a sweet-tart taste and is commonly peeled and eaten fresh, or squeezed for its juice.',
                'item_image_link' => 'items/oranges.png',
                'price' => '15000',
            ],
            [
                'item_name' => 'Tomato 1',
                'item_desc' => 'The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.',
                'item_image_link' => 'items/tomato.png',
                'price' => '7500',
            ],
            [
                'item_name' => 'Tomato 2',
                'item_desc' => 'The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.',
                'item_image_link' => 'items/tomato.png',
                'price' => '12000',
            ],
            [
                'item_name' => 'Tomato 3',
                'item_desc' => 'The tomato is the edible berry of the plant Solanum lycopersicum, commonly known as the tomato plant. The species originated in western South America, Mexico, and Central America. The Mexican Nahuatl word tomatl gave rise to the Spanish word tomate, from which the English word tomato derived.',
                'item_image_link' => 'items/tomato.png',
                'price' => '15000',
            ],
            [
                'item_name' => 'Potato 1',
                'item_desc' => 'The potato is a starchy food, a tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas.',
                'item_image_link' => 'items/potato.png',
                'price' => '5000',
            ],
            [
                'item_name' => 'Potato 2',
                'item_desc' => 'The potato is a starchy food, a tuber of the plant Solanum tuberosum and is a root vegetable native to the Americas.',
                'item_image_link' => 'items/potato.png',
                'price' => '8000',
            ],
            [
                'item_name' => 'Watermelon 1',
                'item_desc' => 'Watermelon boasts a triad of flavors—bitter, sweet, and sour. The bitter flavors of the fruit are strong enough to keep the sweet from being overpouring, and the sour makes the bitter more manageable.',
                'item_image_link' => 'items/watermelon.jpg',
                'price' => '13000',
            ],
            [
                'item_name' => 'Watermelon 2',
                'item_desc' => 'Watermelon boasts a triad of flavors—bitter, sweet, and sour. The bitter flavors of the fruit are strong enough to keep the sweet from being overpouring, and the sour makes the bitter more manageable.',
                'item_image_link' => 'items/watermelon.jpg',
                'price' => '9000',
            ],
            [
                'item_name' => 'Watermelon 3',
                'item_desc' => 'Watermelon boasts a triad of flavors—bitter, sweet, and sour. The bitter flavors of the fruit are strong enough to keep the sweet from being overpouring, and the sour makes the bitter more manageable.',
                'item_image_link' => 'items/watermelon.jpg',
                'price' => '10000',
            ],
            [
                'item_name' => 'Blueberry 1',
                'item_desc' => 'Blueberries are a widely distributed and widespread group of perennial flowering plants with blue or purple berries.',
                'item_image_link' => 'items/blueberry.png',
                'price' => '5000',
            ],
            [
                'item_name' => 'Blueberry 2',
                'item_desc' => 'Blueberries are a widely distributed and widespread group of perennial flowering plants with blue or purple berries.',
                'item_image_link' => 'items/blueberry.png',
                'price' => '6000',
            ],
            [
                'item_name' => 'Blueberry 3',
                'item_desc' => 'Blueberries are a widely distributed and widespread group of perennial flowering plants with blue or purple berries.',
                'item_image_link' => 'items/blueberry.png',
                'price' => '7000',
            ],
            [
                'item_name' => 'Blueberry 4',
                'item_desc' => 'Blueberries are a widely distributed and widespread group of perennial flowering plants with blue or purple berries.',
                'item_image_link' => 'items/blueberry.png',
                'price' => '9000',
            ],
        ]);
    }
}
