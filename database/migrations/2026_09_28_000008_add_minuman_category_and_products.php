<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private array $products = [
        ['name' => 'Fanta', 'slug' => 'fanta', 'image' => '/produk/fanta.webp', 'sort_order' => 1],
        ['name' => 'Sprite', 'slug' => 'sprite', 'image' => '/produk/sprite.webp', 'sort_order' => 2],
        ['name' => 'Coca Cola', 'slug' => 'coca-cola', 'image' => '/produk/coca-cola.webp', 'sort_order' => 3],
        ['name' => 'Marjan', 'slug' => 'marjan', 'image' => '/produk/marjan.webp', 'sort_order' => 4],
        ['name' => 'ABC', 'slug' => 'abc', 'image' => '/produk/abc.webp', 'sort_order' => 5],
        ['name' => 'Teh Pucuk', 'slug' => 'teh-pucuk', 'image' => '/produk/teh-pucuk.webp', 'sort_order' => 6],
        ['name' => 'Floridina', 'slug' => 'floridina', 'image' => '/produk/floridina.webp', 'sort_order' => 7],
        ['name' => 'Mineral Botol dan Gelas', 'slug' => 'mineral-botol-dan-gelas', 'image' => '/produk/mineral-botol-dan-gelas.webp', 'sort_order' => 8],
    ];

    public function up(): void
    {
        $categoryId = DB::table('categories')->where('slug', 'minuman')->value('id');

        if (! $categoryId) {
            $now = now();
            $categoryId = DB::table('categories')->insertGetId([
                'name' => 'Minuman',
                'slug' => 'minuman',
                'description' => 'Menjual berbagai minuman',
                'icon' => '🥤',
                'sort_order' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }

        foreach ($this->products as $product) {
            if (DB::table('products')->where('slug', $product['slug'])->exists()) {
                continue;
            }

            DB::table('products')->insert([
                'category_id' => $categoryId,
                'name' => $product['name'],
                'slug' => $product['slug'],
                'image' => $product['image'],
                'unit' => 'kg',
                'is_active' => true,
                'sort_order' => $product['sort_order'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        DB::table('products')->whereIn('slug', array_column($this->products, 'slug'))->delete();
        DB::table('categories')->where('slug', 'minuman')->delete();
    }
};
