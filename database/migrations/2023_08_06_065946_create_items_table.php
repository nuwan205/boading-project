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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name','200');
            $table->boolean('type');
            $table->integer('vacancies');
            $table->integer('distance');
            $table->double('latitude');
            $table->double('longitude');
            $table->double('price');
            $table->string('description','2000');
            $table->double('area');
            $table->integer('built');
            $table->integer('bathroom');
            $table->unsignedBigInteger('added_by');
            $table->foreign('added_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
