<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name_eng');
            $table->string('name_nep');
            $table->string('slug_eng');
            $table->string('slug_nep');
            $table->string('vendor_name_eng');
            $table->string('vendor_name_nep');
            $table->string('price_eng');
            $table->string('price_nep');
            $table->longText('description_eng');
            $table->longText('description_nep');
            $table->string('link');
            $table->string('image');
            $table->string('alt_image');
            $table->string('status');
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
        Schema::dropIfExists('products');
    }
}
