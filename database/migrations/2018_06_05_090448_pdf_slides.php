<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PdfSlides extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdf_slides', function (Blueprint $table) {
            $table->increments('slide_id');
            $table->string('slide_line1');
            $table->string('slide_line2');
            $table->string('slide_line3');
            $table->string('slide_url');
            $table->string('slide_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pdf_slides');
    }
}
