<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('CASCADE')
                ->onUpdate('RESTRICT');
              $table->integer('name');
                $table->integer('characteristics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}
