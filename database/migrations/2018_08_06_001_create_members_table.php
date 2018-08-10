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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('dni');
            $table->integer('type_dni')->unsigned();
            $table->foreign('type_dni')->references('id')->on('identifications')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');;
            $table->string('phone')->nullable();
            $table->string('landline');
            $table->string('email')->unique();
            $table->string('address',100);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('location_id')->unsigned();
            $table->foreign('location_id')->references('id')->on('locations')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('neighborhood_id')->unsigned();
            $table->foreign('neighborhood_id')->references('id')->on('neighborhoods')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('departament_id')->unsigned();
            $table->foreign('departament_id')->references('id')->on('departaments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('birthdate');
            $table->integer('civilstatus_id')->unsigned();
            $table->foreign('civilstatus_id')->references('id')->on('civilstatuses')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('date_baptism');
            $table->date('admission_church');
            $table->date('wedding_anniversary')->nullable();
            $table->boolean('active')->default(false);
            $table->boolean('is_leader')->default(false);
            $table->integer('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
