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
        Schema::create('print_cheques', function (Blueprint $table) {
            $table->id();
            $table->string('printid');
            $table->string('chequeno');
            $table->string('amount');
            $table->date('chequedata');
            $table->date('tochequedata');
            $table->date('issuedata');
            $table->date('toissuedata');
            $table->string('desing');
            $table->string('payto');
            $table->string('printstatus');
            $table->date('printdateform');
            $table->date('toprintdateform');
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
        Schema::dropIfExists('print_cheques');
    }
};
