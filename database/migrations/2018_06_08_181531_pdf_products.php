<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_name')->unique();
            $table->string('product_slug');
            $table->string('product_unit');
            $table->integer('product_price');
            $table->string('product_promotion');
            $table->string('product_condition');
            $table->string('product_featured');
            $table->string('product_img');
            $table->text('product_description');
            $table->text('product_content');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                ->references('category_id')
                ->on('pdf_categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('pdf_products');
    }
}
