<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProductReviews;
use App\Models\Products;
use App\Models\Stores;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $userdata = [
            [
                'name' => 'Ilham Ibnu Ahmad',
                'email' => 'ilham@gmail.com',
                'city' => 'Jakarta',
            ],
            [
                'name' => 'Achamad Zakaria',
                'email' => 'arya@gmail.com',
                'city' => 'Bandung',
            ],
        ];

        foreach ($userdata as $user) {
            User::create($user);
        }

        $storedata = [
            [
                'name' => 'Toko A',
                'user_id' => 1,
            ],
            [
                'name' => 'Toko B',
                'user_id' => 2,
            ],
        ];

        foreach ($storedata as $store) {
            Stores::create($store);
        }

        $productdata = [
            [
                'name' => 'Product A',
                'slug' => 'product-a',
                'price' => 10000,
                'description' => 'Product A Description',
                'photo' => 'product-a.jpg',
                'store_id' => 1,
            ],
            [
                'name' => 'Product B',
                'slug' => 'product-b',
                'price' => 20000,
                'description' => 'Product B Description',
                'photo' => 'product-b.jpg',
                'store_id' => 1,
            ],
            [
                'name' => 'Product C',
                'slug' => 'product-c',
                'price' => 30000,
                'description' => 'Product C Description',
                'photo' => 'product-c.jpg',
                'store_id' => 1,
            ],
            [
                'name' => 'Product D',
                'slug' => 'product-d',
                'price' => 40000,
                'description' => 'Product D Description',
                'photo' => 'product-d.jpg',
                'store_id' => 1,
            ],
            [
                'name' => 'Product E',
                'slug' => 'product-e',
                'price' => 20000,
                'description' => 'Product E Description',
                'photo' => 'product-e.jpg',
                'store_id' => 1,
            ],

            [
                'name' => 'Product F',
                'slug' => 'product-f',
                'price' => 10000,
                'description' => 'Product F Description',
                'photo' => 'product-f.jpg',
                'store_id' => 2,
            ],
            [
                'name' => 'Product G',
                'slug' => 'product-g',
                'price' => 20000,
                'description' => 'Product G Description',
                'photo' => 'product-g.jpg',
                'store_id' => 2,
            ],
            [
                'name' => 'Product H',
                'slug' => 'product-h',
                'price' => 30000,
                'description' => 'Product H Description',
                'photo' => 'product-h.jpg',
                'store_id' => 2,
            ],
            [
                'name' => 'Product I',
                'slug' => 'product-i',
                'price' => 40000,
                'description' => 'Product I Description',
                'photo' => 'product-i.jpg',
                'store_id' => 2,
            ],
            [
                'name' => 'Product J',
                'slug' => 'product-j',
                'price' => 20000,
                'description' => 'Product J Description',
                'photo' => 'product-j.jpg',
                'store_id' => 2,
            ],
        ];

        foreach ($productdata as $product) {
            Products::create($product);
        }

        $reviewdata = [
            [
                'product_id' => 1,
                'user_id' => 1,
                'score' => 5,
                'review' => 'Product A Review',
            ],
            [
                'product_id' => 2,
                'user_id' => 1,
                'score' => 4,
                'review' => 'Product B Review',
            ],
            [
                'product_id' => 3,
                'user_id' => 1,
                'score' => 3,
                'review' => 'Product C Review',
            ],
            [
                'product_id' => 4,
                'user_id' => 1,
                'score' => 2,
                'review' => 'Product D Review',
            ],
            [
                'product_id' => 5,
                'user_id' => 1,
                'score' => 1,
                'review' => 'Product E Review',
            ],
            [
                'product_id' => 6,
                'user_id' => 2,
                'score' => 5,
                'review' => 'Product F Review',
            ],
            [
                'product_id' => 7,
                'user_id' => 2,
                'score' => 4,
                'review' => 'Product G Review',
            ],
            [
                'product_id' => 8,
                'user_id' => 2,
                'score' => 3,
                'review' => 'Product H Review',
            ],
            [
                'product_id' => 9,
                'user_id' => 2,
                'score' => 2,
                'review' => 'Product I Review',
            ],
            [
                'product_id' => 10,
                'user_id' => 2,
                'score' => 1,
                'review' => 'Product J Review',
            ],

        ];

        foreach ($reviewdata as $review) {
            ProductReviews::create($review);
        }
    }
}
