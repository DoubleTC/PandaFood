<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfOrderdetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_orderdetails', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('detail_qty');
            $table->integer('detail_price');
            $table->integer('detail_subtotal');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')
                ->references('product_id')
                ->on('pdf_products')
                ->onDelete('cascade');
            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')
                ->references('order_id')
                ->on('pdf_orders')
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
        Schema::dropIfExists('pdf_orderdetails');
    }
}
