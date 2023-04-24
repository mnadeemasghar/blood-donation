<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBloodDatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_database', function (Blueprint $table) {
            $table->id();
            $table->string('blood_group');
            $table->string('type'); // donate or required
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('contact_detail');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_database');
    }
}
