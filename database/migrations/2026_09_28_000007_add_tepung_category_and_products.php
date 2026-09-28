<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private array $products = [
        ['name' => 'Tepung Terigu', 'slug' => 'tepung-terigu', 'image' => '/produk/tepung-terigu.webp', 'sort_order' => 1],
        ['name' => 'Tepung Tapioka', 'slug' => 'tepung-tapioka', 'image' => '/produk/tepung-tapioka.webp', 'sort_order' => 2],
        ['name' => 'Tepung Beras', 'slug' => 'tepung-beras', 'image' => '/produk/tepung-beras.webp', 'sort_order' => 3],
        ['name' => 'Tepung Ketan Hitam', 'slug' => 'tepung-ketan-hitam', 'image' => '/produk/tepung-ketan-hitam.webp', 'sort_order' => 4],
        ['name' => 'Tepung Ketan Putih', 'slug' => 'tepung-ketan-putih', 'image' => '/produk/tepung-ketan-putih.webp', 'sort_order' => 5],
        ['name' => 'Tepung Maizena', 'slug' => 'tepung-maizena', 'image' => '/produk/tepung-maizena.webp', 'sort_order' => 6],
    ];

    public function up(): void
    {
        $categoryId = DB::table('categories')->where('slug', 'tepung')->value('id');

        if (! $categoryId) {
            $now = now();
            $categoryId = DB::table('categories')->insertGetId([
                'name' => 'Tepung',
                'slug' => 'tepung',
                'description' => 'Menjual berbagai jenis tepung',
                'icon' => '🌾',
                'sort_order' => 6,
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
        DB::table('categories')->where('slug', 'tepung')->delete();
    }
};
