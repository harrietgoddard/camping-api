<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('campsite_id')->unsigned();
            $table->foreign('campsite_id')->references('id')->on('campsites')->onDelete('cascade');
            $table->string('username', 50)->nullable();
            $table->enum('rating', [1, 2, 3, 4, 5])->nullable();
            $table->text('desription')->nullable();
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
        Schema::dropIfExists('reviews');
    }
}
