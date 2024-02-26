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
        Schema::create('umrahs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->integer('duration');
            $table->integer('beds');
            $table->integer('price');
            $table->integer('type');
            $table->longText('overview')->nullable();
            $table->longText('including')->nullable();
            $table->longText('excluding')->nullable();
            $table->longText('requirements')->nullable();
            $table->longText('condition')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrahs');
    }
};
