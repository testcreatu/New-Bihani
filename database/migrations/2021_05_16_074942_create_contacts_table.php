<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('address_eng');
            $table->string('address_nep');
            $table->string('number_eng');
            $table->string('number_nep');
            $table->string('image');
            $table->string('alt_image');
            $table->string('website')->nullable();
            $table->string('email');
            $table->string('fb_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('insta_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('google_link')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
