<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')
            ->where(function ($query) {
                $query->where('image', 'like', '%.png')
                    ->orWhere('image', 'like', '%.jpg')
                    ->orWhere('image', 'like', '%.jpeg');
            })
            ->update([
                'image' => DB::raw("REPLACE(REPLACE(REPLACE(image, '.jpeg', '.webp'), '.png', '.webp'), '.jpg', '.webp')"),
            ]);
    }

    public function down(): void
    {
        //
    }
};
