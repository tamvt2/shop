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
        Schema::create('khachhangs', function (Blueprint $table) {
            $table->id();
            $table->String('hoten');
            $table->String('username');
            $table->String('password');
            $table->String('diachi');
            $table->String('email');
            $table->String('dienthoai');
            $table->String('gioitinh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khachhangs');
    }
};
