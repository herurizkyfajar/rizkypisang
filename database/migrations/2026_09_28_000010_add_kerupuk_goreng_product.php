<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private array $products = [
        ['name' => 'Aneka Kerupuk Goreng', 'slug' => 'aneka-kerupuk-goreng', 'image' => '/produk/aneka-kerupuk-goreng.webp', 'sort_order' => 11],
    ];

    public function up(): void
    {
        $categoryId = DB::table('categories')->where('slug', 'sembako')->value('id');

        if (! $categoryId) {
            echo "Kategori 'sembako' tidak ditemukan, dilewati.\n";

            return;
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
    }
};
