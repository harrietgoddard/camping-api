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
