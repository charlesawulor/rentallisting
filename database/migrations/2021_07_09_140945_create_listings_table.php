<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('image6');
            $table->string('image7');
            $table->string('image8');
            $table->string('image9');
            $table->string('price');
            $table->string('overview');
            $table->string('livingroom');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('size');
            $table->string('status');
            $table->string('property_type');
            $table->string('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('school');
            $table->string('worship_center');
            $table->string('park');
            $table->string('mall');
            $table->string('shop');
            $table->string('appliance');
            $table->string('garage');
            $table->string('pet');
            $table->string('floor');
            $table->string('agent_name');
            $table->string('agent_number');
            $table->string('agent_email');
            $table->string('inspection_cost');
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
        Schema::dropIfExists('listings');
    }
}
