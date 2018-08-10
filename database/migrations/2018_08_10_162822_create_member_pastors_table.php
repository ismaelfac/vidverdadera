<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberPastorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_pastors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->integer('zone_assigment_id')->unsigned();
            $table->foreign('zone_assigment_id')->references('id')->on('zone_assigments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('activation_date_district');
            $table->integer('zonal_pastors_id')->unsigned();
            $table->foreign('zonal_pastors_id')->references('id')->on('zone_assigments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->date('activation_date_zonal');
            $table->date('expiration_date')->nullable();
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
        Schema::dropIfExists('member_pastors');
    }
}
