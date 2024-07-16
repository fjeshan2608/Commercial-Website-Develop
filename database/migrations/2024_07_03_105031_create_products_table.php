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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('brand_id')->nullable();
            $table->string('product_name');
            $table->string('product_slug');
            $table->string('product_code')->nullable();
            $table->text('product_description');
            $table->text('product_tags');
            $table->string('color')->nullable();
            $table->string('size')->nullable();
            $table->string('product_purchase_price');
            $table->string('product_selling_price');
            $table->string('discount_price')->nullable();
            $table->integer('in_stock');
            $table->string('main_thumbnail');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->integer('product_status');
            $table->integer('on_sale');
            $table->integer('best_rated');
            $table->integer('flast_sale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

