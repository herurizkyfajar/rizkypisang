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
            ['name' => 'Pisang Ambon Lumut', 'slug' => 'pisang-ambon-lumut', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T223457.064.webp'],
            ['name' => 'Pisang Ambon Putih', 'slug' => 'pisang-ambon-putih', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T223143.124.webp'],
            ['name' => 'Pisang Raja Cere', 'slug' => 'pisang-raja-cere', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T222844.320.webp'],
            ['name' => 'Pisang Muli', 'slug' => 'pisang-muli', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T222654.511.webp'],
            ['name' => 'Pisang Siem', 'slug' => 'pisang-siem', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T222449.495.webp'],
            ['name' => 'Pisang Kepok', 'slug' => 'pisang-kepok', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T222302.180.webp'],
            ['name' => 'Pisang Bangkawulu', 'slug' => 'pisang-bangkawulu', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T221940.571.webp'],
            ['name' => 'Pisang Nangka', 'slug' => 'pisang-nangka', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T221629.265.webp'],
            ['name' => 'Pisang Raja Bulu', 'slug' => 'pisang-raja-bulu', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T221324.893.webp'],
            ['name' => 'Pisang Kapas', 'slug' => 'pisang-kapas', 'image' => '/produk/Desain-tanpa-judul-2025-10-24T220912.281.webp'],
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
            ['name' => 'Keripik Pisang', 'slug' => 'keripik-pisang', 'image' => '/produk/Rizky-Pisang-4.webp'],
            ['name' => 'Sale Pisang Matang', 'slug' => 'sale-pisang-matang', 'image' => '/produk/Rizky-Pisang-2.webp'],
            ['name' => 'Sale Pisang Mentah', 'slug' => 'sale-pisang-mentah', 'image' => '/produk/Rizky-Pisang-1.webp'],
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
            ['name' => 'Gas 3Kg', 'slug' => 'gas-3kg', 'image' => '/produk/Rizky-Pisang-16.webp'],
            ['name' => 'Aneka Bumbu Dapur', 'slug' => 'aneka-bumbu-dapur', 'image' => '/produk/Rizky-Pisang-15.webp'],
            ['name' => 'Aneka Gula Merah', 'slug' => 'aneka-gula-merah', 'image' => '/produk/Rizky-Pisang-13.webp'],
            ['name' => 'Aneka Umbi', 'slug' => 'aneka-umbi', 'image' => '/produk/Rizky-Pisang-14.webp'],
            ['name' => 'Arang Kayu', 'slug' => 'arang-kayu', 'image' => '/produk/Rizky-Pisang-11.webp'],
            ['name' => 'Arang Batok Kelapa', 'slug' => 'arang-batok-kelapa', 'image' => '/produk/Rizky-Pisang-10.webp'],
            ['name' => 'Batok Kelapa', 'slug' => 'batok-kelapa', 'image' => '/produk/Rizky-Pisang-9.webp'],
            ['name' => 'Santan Kelapa', 'slug' => 'santan-kelapa', 'image' => '/produk/Rizky-Pisang-8.webp'],
            ['name' => 'Kelapa Parud', 'slug' => 'kelapa-parud', 'image' => '/produk/Rizky-Pisang-7.webp'],
            ['name' => 'Kelapa Sayur Butiran', 'slug' => 'kelapa-sayur-butiran', 'image' => '/produk/Rizky-Pisang-6.webp'],
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
            'image' => '/produk/Rizky-Pisang-19.webp',
            'category_id' => $perikanan->id,
            'sort_order' => 1,
        ]);

        // Beras
        $beras = Category::create([
            'name' => 'Beras',
            'slug' => 'beras',
            'description' => 'Menjual berbagai jenis beras',
            'icon' => '🍚',
            'sort_order' => 5,
        ]);

        $berasProducts = [
            ['name' => 'Beras Jembar', 'slug' => 'beras-jembar', 'image' => '/produk/beras-jembar.webp'],
            ['name' => 'Beras Cianjur', 'slug' => 'beras-cianjur', 'image' => '/produk/beras-cianjur.webp'],
            ['name' => 'Beras Rojolele', 'slug' => 'beras-rojolele', 'image' => '/produk/beras-rojolele.webp'],
            ['name' => 'Beras Subang', 'slug' => 'beras-subang', 'image' => '/produk/beras-subang.webp'],
        ];

        foreach ($berasProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $beras->id,
                'sort_order' => $i + 1,
            ]);
        }

        // Tepung
        $tepung = Category::create([
            'name' => 'Tepung',
            'slug' => 'tepung',
            'description' => 'Menjual berbagai jenis tepung',
            'icon' => '🌾',
            'sort_order' => 6,
        ]);

        $tepungProducts = [
            ['name' => 'Tepung Terigu', 'slug' => 'tepung-terigu', 'image' => '/produk/tepung-terigu.webp'],
            ['name' => 'Tepung Tapioka', 'slug' => 'tepung-tapioka', 'image' => '/produk/tepung-tapioka.webp'],
            ['name' => 'Tepung Beras', 'slug' => 'tepung-beras', 'image' => '/produk/tepung-beras.webp'],
            ['name' => 'Tepung Ketan Hitam', 'slug' => 'tepung-ketan-hitam', 'image' => '/produk/tepung-ketan-hitam.webp'],
            ['name' => 'Tepung Ketan Putih', 'slug' => 'tepung-ketan-putih', 'image' => '/produk/tepung-ketan-putih.webp'],
            ['name' => 'Tepung Maizena', 'slug' => 'tepung-maizena', 'image' => '/produk/tepung-maizena.webp'],
        ];

        foreach ($tepungProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $tepung->id,
                'sort_order' => $i + 1,
            ]);
        }

        // Minuman
        $minuman = Category::create([
            'name' => 'Minuman',
            'slug' => 'minuman',
            'description' => 'Menjual berbagai minuman',
            'icon' => '🥤',
            'sort_order' => 7,
        ]);

        $minumanProducts = [
            ['name' => 'Fanta', 'slug' => 'fanta', 'image' => '/produk/fanta.webp'],
            ['name' => 'Sprite', 'slug' => 'sprite', 'image' => '/produk/sprite.webp'],
            ['name' => 'Coca Cola', 'slug' => 'coca-cola', 'image' => '/produk/coca-cola.webp'],
            ['name' => 'Marjan', 'slug' => 'marjan', 'image' => '/produk/marjan.webp'],
            ['name' => 'ABC', 'slug' => 'abc', 'image' => '/produk/abc.webp'],
            ['name' => 'Teh Pucuk', 'slug' => 'teh-pucuk', 'image' => '/produk/teh-pucuk.webp'],
            ['name' => 'Floridina', 'slug' => 'floridina', 'image' => '/produk/floridina.webp'],
            ['name' => 'Mineral Botol dan Gelas', 'slug' => 'mineral-botol-dan-gelas', 'image' => '/produk/mineral-botol-dan-gelas.webp'],
        ];

        foreach ($minumanProducts as $i => $product) {
            Product::create([
                ...$product,
                'category_id' => $minuman->id,
                'sort_order' => $i + 1,
            ]);
        }
    }
}
