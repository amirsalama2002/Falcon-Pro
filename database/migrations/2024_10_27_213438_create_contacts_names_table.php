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
        Schema::create('contacts_names', function (Blueprint $table) {
            $table->id();
            $table->string('contractno');
            $table->string('tenantbuyer');
            $table->string('salesperson');
            $table->date('startdatefrom');
            $table->date('tostartdatefrom');
            $table->date('enddatefrom');
            $table->date('toenddatefrom');
            $table->string('property');
            $table->string('buildingname');
            $table->string('agentbroker');
            $table->string('contractstatus');
            $table->string('contracttype');
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
        Schema::dropIfExists('contacts_names');
    }
};
