<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZoneAssigmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zone_assigments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('leader_member_id')->unsigned();
            $table->foreign('leader_member_id')->references('id')->on('leader_members')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('activation_date');
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('zone_assigments');
    }
}
