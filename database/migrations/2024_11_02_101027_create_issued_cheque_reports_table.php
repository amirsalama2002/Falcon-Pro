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
        Schema::create('issued_cheque_reports', function (Blueprint $table) {
            $table->id();
            $table->string('printid');
            $table->string('chequeno');
            $table->string('amount');
            $table->string(column: 'chequedate');
            $table->string(column: 'tochequedate');
            $table->string(column: 'issuedate');
            $table->string('toissuedata');
            $table->string(column: 'desing');
            $table->string(column: 'payto');
            $table->string(column: 'printstatus');
            $table->string('printdateform');
            $table->string('toprintdateform');
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
        Schema::dropIfExists('issued_cheque_reports');
    }
};
