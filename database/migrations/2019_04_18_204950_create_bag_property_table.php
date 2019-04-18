<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBagPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bag_property', function (Blueprint $table) {
            $table->integer('bag_id')->unsigned();
            $table->integer('property_id')->unsigned();

            $table->foreign('bag_id')
                ->references('id')->on('bags')
                ->onDelete('cascade');

            $table->foreign('property_id')
                ->references('id')->on('properties')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bag_property');
    }
}
