<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomenclaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomenclatures', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
              $table->integer('date_of_delivery');
                $table->integer('id_buyers')->unsigned();
                $table->foreign('id_buyers')
                    ->references('id')
                    ->on('buyers')
                    ->onDelete('CASCADE')
                    ->onUpdate('RESTRICT');
                  $table->integer('id_sellers')->unsigned();
                  $table->foreign('id_sellers')
                      ->references('id')
                      ->on('sellers')
                      ->onDelete('CASCADE')
                      ->onUpdate('RESTRICT');
                    $table->integer('id_orders')->unsigned();
                    $table->foreign('id_orders')
                        ->references('id')
                        ->on('orders')
                        ->onDelete('CASCADE')
                        ->onUpdate('RESTRICT');

                  $table->integer('order_date');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nomenclatures');
    }
}
