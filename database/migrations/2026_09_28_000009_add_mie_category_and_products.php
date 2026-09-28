<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private array $products = [
        ['name' => 'Aneka Indomie', 'slug' => 'aneka-indomie', 'image' => '/produk/aneka-indomie.webp', 'sort_order' => 1],
        ['name' => 'Aneka Mie Sedap', 'slug' => 'aneka-mie-sedap', 'image' => '/produk/aneka-mie-sedap.webp', 'sort_order' => 2],
        ['name' => 'Aneka Sarimi', 'slug' => 'aneka-sarimi', 'image' => '/produk/aneka-sarimi.webp', 'sort_order' => 3],
        ['name' => 'Aneka Pop Mie', 'slug' => 'aneka-pop-mie', 'image' => '/produk/aneka-pop-mie.webp', 'sort_order' => 4],
    ];

    public function up(): void
    {
        $categoryId = DB::table('categories')->where('slug', 'mie')->value('id');

        if (! $categoryId) {
            $now = now();
            $categoryId = DB::table('categories')->insertGetId([
                'name' => 'Mie',
                'slug' => 'mie',
                'description' => 'Menjual berbagai aneka mie',
                'icon' => '🍜',
                'sort_order' => 8,
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
        DB::table('categories')->where('slug', 'mie')->delete();
    }
};
