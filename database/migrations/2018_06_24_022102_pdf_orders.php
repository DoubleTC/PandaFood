<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_orders', function (Blueprint $table) {
            $table->increments('order_id');
            $table->integer('order_total');
            $table->string('order_name');
            $table->string('order_phone');
            $table->string('order_address');
            $table->string('order_note');
            $table->timestamp('order_receivetime');
            $table->string('order_methodpayment');
            $table->string('order_status');
            $table->string('order_billoflanding')->nullable();;
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('user_id')
                ->on('pdf_users')
                ->onDelete('cascade');
            $table->integer('shipper_id')->unsigned()->nullable();
            $table->foreign('shipper_id')
                ->references('shipper_id')
                ->on('pdf_shippers')
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
        Schema::dropIfExists('pdf_orders');
    }
}
