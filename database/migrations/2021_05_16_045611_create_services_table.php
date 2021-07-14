<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('title_eng');
            $table->string('title_nep');
            $table->string('slug_eng');
            $table->string('slug_nep');
            $table->string('image');
            $table->string('alt_image');
            $table->string('description_eng');
            $table->string('description_nep');
            $table->string('status');
            $table->string('seo_title');
            $table->string('seo_keyword');
            $table->string('seo_description');
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
        Schema::dropIfExists('services');
    }
}
