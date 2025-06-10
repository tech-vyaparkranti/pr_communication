<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_services', function (Blueprint $table) {
            $table->id();
            $table->string("image")->nullable();
            $table->string("video_link")->nullable();
            $table->longText("description");
            $table->string("title");
            $table->tinyInteger("status")->default(1);
            $table->integer("position");
            $table->string("brand_id");
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
        Schema::dropIfExists('brand_services');
    }
}
