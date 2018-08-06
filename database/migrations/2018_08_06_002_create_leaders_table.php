<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('is_deacon');
            $table->boolean('is_oldMan');
            $table->boolean('is_cult_Pastor');
            $table->boolean('is_interimPastor');
            $table->boolean('is_ordainedPastor');
            $table->boolean('is_zonalPastor');
            $table->boolean('is_districtPastor');
            $table->boolean('is_teacherChildren');
            $table->boolean('is_emiMaster');
            $table->boolean('is_dissimulatedTeacher');
            $table->boolean('is_evangelist');
            $table->boolean('is_praise');
            $table->boolean('is_coPastor');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('leaders');
    }
}
