<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campsites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->unsigned();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
            $table->string('campsite_name', 50)->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('address', 50)->nullable();
            $table->string('town_city', 50)->nullable();
            $table->string('postcode', 50)->nullable();
            $table->string('amenities', 250)->nullable();
            $table->enum('rating', [1, 2, 3, 4, 5])->nullable();
            $table->string('contact_no', 50)->nullable();
            $table->string('contact_email', 50)->nullable();
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
        Schema::dropIfExists('campsites');
    }
}
/*
$campsite = new Campsite();
$campsite->region_id = 1;
$campsite->campsite_name = "Henry's Campsite";
$campsite->price = 25;
$campsite->description = "We’re situated in a rural area, with a spectacular sea view and sunsets, at the top of caerthillian valley within a couple of minutes walk from the village centre and ten minutes walk to the coastal paths. there are many inland paths to bring you back into the village centre from all directions along the coastal paths and beaches.";
$campsite->address = "The Lizard";
$campsite->town_city = "Helston";
$campsite->postcode = "TR12 7NX";
$campsite->amenities = "Showers, toilets, cafe";
$campsite->rating = 3;
$campsite->contact_no = "01326290596"
$campsite->contact_email = "info@henryscampsite.co.uk"
$campsite->save();
*/