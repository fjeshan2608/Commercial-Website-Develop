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
        Schema::create('stockdetails', function (Blueprint $table) {
            $table->id('sotckdetail_id');
            $table->integer('stock_id');
            $table->integer('qty');
            $table->string('added_on');
            $table->string('added_month');
            $table->string('added_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stockdetails');
    }
};