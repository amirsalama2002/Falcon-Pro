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
        Schema::create('commision_dates_reports', function (Blueprint $table) {
            $table->id();
            $table->date(column: 'dateform');
            $table->date('todateform');
            $table->string(column: 'salesperon');
            $table->string(column: 'contracttype');
            $table->string(column: 'broker');
            $table->string(column: 'reporttype');
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
        Schema::dropIfExists('commision_dates_reports');
    }
};
