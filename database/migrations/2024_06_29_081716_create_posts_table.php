<?php

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
        // Tạo bảng bằng migration
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 150); // string =varchar
            $table->string('image', 500);
            $table->string('description', 300);
            $table->text('content');
            $table->integer('view');
            $table->unsignedBigInteger('cate_id'); //số nguyên dương >0
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
