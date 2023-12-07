<?php

use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('announcements');
        });

        $categories = [
            'Fotocamere',
            'FrancoBolli',
            'Lampadari',
            'Libri',
            'Mobili',
            'Monete ',
            'Quadri',
            'Utensili',
            'Vasi',
            'Vinili',
        ];
        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
