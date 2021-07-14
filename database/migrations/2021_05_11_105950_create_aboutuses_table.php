<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->string('title_eng');
            $table->string('title_nep');
            $table->string('slug_eng');
            $table->string('slug_nep');
            $table->longText('description_eng');
            $table->longText('description_nep');
            $table->longText('why_bihani');
            $table->string('image');
            $table->string('alt_image');
            $table->string('seo_title');
            $table->string('seo_keyword');
            $table->longText('seo_description');
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
        Schema::dropIfExists('aboutuses');
    }
}
