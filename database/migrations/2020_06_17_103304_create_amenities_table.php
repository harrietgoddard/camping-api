<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("amenities", function (Blueprint $table) {
            $table->id();
            $table->string("amenity_name", 50);
        });

        Schema::create("campsite_amenity", function (Blueprint $table) {

            $table->id();

            $table->foreignId("campsite_id")->unsigned();
            $table->foreign("campsite_id")->references("id")
                ->on("campsites")->onDelete("cascade");

            $table->foreignId("amenity_id")->unsigned();
            $table->foreign("amenity_id")->references("id")
                ->on("amenities")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campsite_amenity');
        
        Schema::dropIfExists('amenities');
    }
}
