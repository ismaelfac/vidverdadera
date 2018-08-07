<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dni');
            $table->integer('type_dni')->unsigned();
            $table->foreign('type_dni')->references('id')->on('identifications');
            $table->string('phone');
            $table->string('landline');
            $table->string('email')->unique();
            $table->string('address',100);
            $table->string('latitude');
            $table->string('longitude');
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods');
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
            $table->integer('departament_id')->unsigned();
            $table->foreign('departament_id')->references('id')->on('departaments');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->date('birthdate');
            $table->integer('civilStatus_id')->unsigned();
            $table->foreign('civilStatus_id')->references('id')->on('civilstatuses');
            $table->date('wedding_anniversary');
            $table->boolean('active')->default(false);
            $table->boolean('is_leader')->default(false);
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches');
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
        Schema::dropIfExists('members');
    }
}
