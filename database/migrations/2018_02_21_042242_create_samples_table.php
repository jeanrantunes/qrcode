<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('identification_sample');
            $table->double('depth',8,3);
            $table->double('ph_water',8,3);
            $table->double('ph_cacl2',8,3);
            $table->double('index_smp',8,3);
            $table->double('phosphor',8,3);
            $table->double('potassium',8,3);
            $table->double('aluminum',8,3);
            $table->double('calcium',8,3);
            $table->double('magnesium',8,3);
            $table->double('h_al',8,3);
            $table->double('organic_matter',8,3);
            $table->double('clay',8,3);
            $table->double('sulfur',8,3);
            $table->double('zinc',8,3);
            $table->double('copper',8,3);
            $table->double('manganese',8,3);
            $table->double('iron',8,3);
            $table->double('boron',8,3);
            $table->uuid('signature');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('samples');
    }
}
