<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient', function (Blueprint $table) {
            $table->increments('id');
			$table->string('social_security');
			$table->string('name');
			$table->string('surname');
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('zip');
			$table->string('cellphone');
			$table->string('homephone');
			$table->string('email');
			$table->date('dateofbirth');
			$table->integer('age');
			$table->string('sex');
			$table->string('maritalstatus');
			$table->integer('numchildren');
			$table->string('familydoctor')->nullable();
			$table->string('phonefamilydoctor')->nullable();
			$table->integer('insurance_id')->nullable();
			$table->text('signature')->nullable();
			$table->integer('emergency_contact_id');
			$table->foreign('insurance_id')->references('id')->on('patient');
			$table->foreign('emergency_contact_id')->references('id')->on('emergency_contact');
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
        Schema::dropIfExists('patient');
    }
}
