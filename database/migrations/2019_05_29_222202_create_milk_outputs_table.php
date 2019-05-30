<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMilkOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('milk_outputs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('milk_output')->comment('Will be stored as litres');
            $table->bigInteger('cow_id')->unsigned()->index()->nullable();
            $table->foreign('cow_id')->references('id')->on('cows');

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
        Schema::dropIfExists('milk_outputs');
    }
}
