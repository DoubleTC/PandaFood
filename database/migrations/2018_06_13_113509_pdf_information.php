<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_information', function (Blueprint $table) {
            $table->increments('info_id');
            $table->string('info_name');
            $table->string('info_title');
            $table->string('info_phone');
            $table->string('info_email');
            $table->string('info_address');
            $table->string('info_imgmain');
            $table->string('info_imgtitle');
            $table->string('info_facebook');
            $table->string('info_googleplus');
            $table->text('info_embedcode');
            $table->string('info_owner');
            $table->string('info_keywords');
            $table->string('info_description');
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
        Schema::dropIfExists('pdf_information');
    }
}
