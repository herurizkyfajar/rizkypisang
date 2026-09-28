<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private array $products = [
        ['name' => 'Beras Jembar', 'slug' => 'beras-jembar', 'image' => '/produk/beras-jembar.webp', 'sort_order' => 1],
        ['name' => 'Beras Cianjur', 'slug' => 'beras-cianjur', 'image' => '/produk/beras-cianjur.webp', 'sort_order' => 2],
        ['name' => 'Beras Rojolele', 'slug' => 'beras-rojolele', 'image' => '/produk/beras-rojolele.webp', 'sort_order' => 3],
        ['name' => 'Beras Subang', 'slug' => 'beras-subang', 'image' => '/produk/beras-subang.webp', 'sort_order' => 4],
    ];

    public function up(): void
    {
        $categoryId = DB::table('categories')->where('slug', 'beras')->value('id');

        if (! $categoryId) {
            $now = now();
            $categoryId = DB::table('categories')->insertGetId([
                'name' => 'Beras',
                'slug' => 'beras',
                'description' => 'Menjual berbagai jenis beras',
                'icon' => '🍚',
                'sort_order' => 5,
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
        DB::table('categories')->where('slug', 'beras')->delete();
    }
};
