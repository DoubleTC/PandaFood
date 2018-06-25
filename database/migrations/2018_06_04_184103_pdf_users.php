<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pdf_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_name')->unique();
            $table->string('user_password');
            $table->string('user_email')->unique();
            $table->string('user_fullname');
            $table->integer('user_phone');
            $table->string('user_address');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')
                ->references('group_id')
                ->on('pdf_groups')
                ->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('pdf_users');
    }
}
