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
        Schema::create('cheque_list_reports', function (Blueprint $table) {
            $table->id();
            $table->string('printid');
            $table->string('chequeno');
            $table->string('amount');
            $table->date(column: 'chequedate');
            $table->date(column: 'tochequedate');
            $table->date(column: 'issuedate');
            $table->date('toissuedata');
            $table->string(column: 'desing');
            $table->string(column: 'payto');
            $table->string(column: 'printstatus');
            $table->date('printdateform');
            $table->date('toprintdateform');
            $table->string(column: 'companty');
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
        Schema::dropIfExists('cheque_list_reports');
    }
};
