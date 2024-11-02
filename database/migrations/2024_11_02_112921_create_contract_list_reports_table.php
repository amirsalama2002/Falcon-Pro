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
        Schema::create('contract_list_reports', function (Blueprint $table) {
            $table->id();
            $table->string('contractno');
            $table->string('tenantbuyer');
            $table->string('salesperson');
            $table->date('startdateform');
            $table->date('tostartdateform');
            $table->date(column: 'enddateform');
            $table->date('toenddateform');
            $table->string(column: 'property');
            $table->string(column: 'buildingname');
            $table->string('agentbroker');
            $table->string(column: 'contractstatus');
            $table->string(column: 'contracttype');
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
        Schema::dropIfExists('contract_list_reports');
    }
};
