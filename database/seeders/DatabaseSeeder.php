<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Categories
        $pisangSegar = Category::create([
            'name' => 'Pisang Segar',
            'slug' => 'pisang-segar',
            'description' => 'Menjual aneka macam pisang segar',
            'icon' => '🍌',
            'sort_order' => 1,
        ]);

        $pisangOlahan = Category::create([
            'name' => 'Pisang Olahan',
            'slug' => 'pisang-olahan',
            'description' => 'Menjual aneka olahan pisang',
            'icon' => '🍘',
            'sort_order' => 2,
        ]);

        $sembako = Category::create([
            'name' => 'Sembako & Lainnya',
            'slug' => 'sembako',
            'description' => 'Menjual berbagai bahan sembako',
            'icon' => '🛒',
            'sort_order' => 3,
        ]);

        $perikanan = Category::create([
            'name' => 'Perikanan',
            'slug' => 'perikanan',
            'description' => 'Menjual hasil perikanan',
            'icon' => '🐟',
            'sort_order' => 4,
        ]);

        // Pisang Segar
        $pisangProducts = [
            ['name' => 'Pisang Ambon Lumut', 'slug' => 'pisang-ambon-lumut', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T223457.064.png'],
            ['name' => 'Pisang Ambon Putih', 'slug' => 'pisang-ambon-putih', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T223143.124.png'],
            ['name' => 'Pisang Raja Cere', 'slug' => 'pisang-raja-cere', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T222844.320.png'],
            ['name' => 'Pisang Muli', 'slug' => 'pisang-muli', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T222654.511.png'],
            ['name' => 'Pisang Siem', 'slug' => 'pisang-siem', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T222449.495.png'],
            ['name' => 'Pisang Kepok', 'slug' => 'pisang-kepok', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T222302.180.png'],
            ['name' => 'Pisang Bangkawulu', 'slug' => 'pisang-bangkawulu', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T221940.571.png'],
            ['name' => 'Pisang Nangka', 'slug' => 'pisang-nangka', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T221629.265.png'],
            ['name' => 'Pisang Raja Bulu', 'slug' => 'pisang-raja-bulu', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T221324.893.png'],
            ['name' => 'Pisang Kapas', 'slug' => 'pisang-kapas', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Desain-tanpa-judul-2025-10-24T220912.281.png'],
        ];

        foreach ($pisangProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $pisangSegar->id,
                'sort_order' => $i + 1,
            ]);
        }

        // Pisang Olahan
        $olahanProducts = [
            ['name' => 'Keripik Pisang', 'slug' => 'keripik-pisang', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-4.png'],
            ['name' => 'Sale Pisang Matang', 'slug' => 'sale-pisang-matang', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-2.png'],
            ['name' => 'Sale Pisang Mentah', 'slug' => 'sale-pisang-mentah', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-1.png'],
        ];

        foreach ($olahanProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $pisangOlahan->id,
                'sort_order' => $i + 1,
            ]);
        }

        // Sembako & Lainnya
        $sembakoProducts = [
            ['name' => 'Gas 3Kg', 'slug' => 'gas-3kg', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-16.jpg'],
            ['name' => 'Aneka Bumbu Dapur', 'slug' => 'aneka-bumbu-dapur', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-15.jpg'],
            ['name' => 'Aneka Gula Merah', 'slug' => 'aneka-gula-merah', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-13.jpg'],
            ['name' => 'Aneka Umbi', 'slug' => 'aneka-umbi', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-14.jpg'],
            ['name' => 'Arang Kayu', 'slug' => 'arang-kayu', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-11.jpg'],
            ['name' => 'Arang Batok Kelapa', 'slug' => 'arang-batok-kelapa', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-10.jpg'],
            ['name' => 'Batok Kelapa', 'slug' => 'batok-kelapa', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-9.jpg'],
            ['name' => 'Santan Kelapa', 'slug' => 'santan-kelapa', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-8.jpg'],
            ['name' => 'Kelapa Parud', 'slug' => 'kelapa-parud', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-7.jpg'],
            ['name' => 'Kelapa Sayur Butiran', 'slug' => 'kelapa-sayur-butiran', 'image' => 'https://rizkypisang.com/wp-content/uploads/2025/10/Rizky-Pisang-6.jpg'],
        ];

        foreach ($sembakoProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $sembako->id,
                'sort_order' => $i + 1,
            ]);
        }

        // Perikanan
        Product::create([
            'name' => 'Ikan Lele',
            'slug' => 'ikan-lele',
            'image' => 'https://rizkypisang.com/wp-content/uploads/2025/12/Rizky-Pisang-19.jpg',
            'category_id' => $perikanan->id,
            'sort_order' => 1,
        ]);
    }
}
