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
            $table->integer('cow_id')->unsigned();
            $table->decimal('milk_output')->comment('Will be stored as litres, but will allow conversion from gallon input too');
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
