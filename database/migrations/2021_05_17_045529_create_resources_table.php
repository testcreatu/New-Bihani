<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name_eng');
            $table->string('name_nep');
            $table->string('slug_eng');
            $table->string('slug_nep');
            $table->string('designation_eng');
            $table->string('designation_nep');
            $table->string('skill_eng');
            $table->string('skill_nep');
            $table->string('number_eng');
            $table->string('number_nep');
            $table->string('image');
            $table->string('alt_image');
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
        Schema::dropIfExists('resources');
    }
}
