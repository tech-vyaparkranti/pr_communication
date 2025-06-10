<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMetaColumnsToBrandServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('brand_services', function (Blueprint $table) {
            // Add your new columns here
            $table->longText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('brand_services', function (Blueprint $table) {
            // Drop the columns if the migration is rolled back
            $table->dropColumn(['meta_title', 'meta_description']);
        });
    }
}