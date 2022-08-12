<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $tag = Tag::factory()
            ->count(4)
            ->state(new Sequence(
                ['tag' => 'beauty'],
                ['tag' => 'health'],
                ['tag' => 'electronic'],
                ['tag' => 'kitchen'],
            ))
            ->create();
        

        

        $product = Product::factory()
            ->count(100)
            ->hasImages(1, function(array $attributes, Product $product){
                return ['product_id' => $product->id];
            })
            ->create()
            ->each(function(Product $product) {
                $randomTags= Tag::all()->random( rand(1, 4) )->pluck('id');
                $product->tags()->attach($randomTags);
            });

        
    }
}
