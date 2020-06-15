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
$campsite->campsite_name = "Pleasant Streams Farm Camping";
$campsite->price = 20;
$campsite->description = "We are tucked away in the countryside in mid Cornwall, a great base to explore the beautiful Cornish coast and attractions from. Our location is very quiet and peaceful, yet we are close to a village and town that provides for all your practical needs. The nearest beach is only a 10-minute drive and we’re at the gateway to the beautiful Roseland peninsular with more stunning beaches and pretty villages to explore. Please see the ‘In the area’ page for more details on local attractions.";
$campsite->address = "St Ewe";
$campsite->town_city = "Saint Austell";
$campsite->postcode = "PL26 7JL";
$campsite->amenities = "Picnic tables, toilets, firepits";
$campsite->rating = 4;
$campsite->contact_no = "0172674837"
$campsite->contact_email = "info@cornallfarmcamping.co.uk"
$campsite->save();
*/