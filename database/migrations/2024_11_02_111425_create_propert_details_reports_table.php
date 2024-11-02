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
        Schema::create('propert_details_reports', function (Blueprint $table) {
            $table->id();
            $table->string('buildingname');
            $table->string(column: 'propeerty');
            $table->string(column: 'type');
            $table->string(column: 'model');
            $table->string(column: 'category');
            $table->string(column: 'priceform');
            $table->string('topriceform');
            $table->string(column: 'size');
            $table->string(column: 'tosize');
            $table->string(column: 'status');
            $table->string(column: 'view');
            $table->string(column: 'feature');
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
        Schema::dropIfExists('propert_details_reports');
    }
};
