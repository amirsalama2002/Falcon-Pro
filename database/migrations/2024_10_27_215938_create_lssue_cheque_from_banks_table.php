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
        Schema::create('lssue_cheque_from_banks', function (Blueprint $table) {
            $table->id();
            $table->string('printid');
            $table->string('chequeno');
            $table->string('amount');
            $table->date('chequedate');
            $table->date('tochequedate');
            $table->date('issuedate');
            $table->date('toissuedate');
            $table->string('desing');
            $table->string('payto');
            $table->string('printstatus');
            $table->date('printdatefrom');
            $table->date('toprintdatefrom');
            $table->string('company');
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
        Schema::dropIfExists('lssue_cheque_from_banks');
    }
};
