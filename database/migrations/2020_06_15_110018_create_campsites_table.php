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
$campsite->region_id = 2;
$campsite->campsite_name = "Hawk Place Campsite";
$campsite->price = 26.80;
$campsite->description = "Hawk place has the best of both worlds, it is situated a stones through from the sea as well as having miles and miles of uninterupted countryside to walk, cycle or horse ride through. As well as there are frequent stunning sunsets - maybe this is why J M W Turner was drawn to the area to create some of his best sunset paintings. Birchington is only 1.5 miles away with a few local shops and restaurants.";
$campsite->address = "Dane Road";
$campsite->town_city = "Birchington";
$campsite->postcode = "CT7 9QS";
$campsite->amenities = "Toilets";
$campsite->rating = 3;
$campsite->contact_no = "01843847142"
$campsite->contact_email = "info@eastkentcamping.co.uk"
$campsite->save();
*/