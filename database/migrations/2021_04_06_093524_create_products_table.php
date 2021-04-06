<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('code');
            $table->string('slug');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->text('short_desc')->nullable();
            $table->text('full_desc')->nullable();
            $table->string('info')->nullable();
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->integer('discount')->default(0);
            $table->integer('rate')->default(0);
            $table->boolean('status')->default(true);
            $table->string('type')->default('PRODUCT');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
