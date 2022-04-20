<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registermps', function (Blueprint $table) {
            $table->id();
            $table->string('companyname');
            $table->text('companyaddr');
            $table->integer('postcode');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('contactperson');
            $table->integer('phoneno');
            $table->string('email');
            $table->string('q1');
            $table->string('q2');
            $table->string('q3');
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
        Schema::dropIfExists('registermps');
    }
};
