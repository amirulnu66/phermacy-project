<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medi_name');
            $table->float('medi_net_price');
            $table->float('medi_sell_price');
            $table->string('medi_box');
            $table->string('medi_quantity');
            $table->string('medi_expire');
            $table->integer('company_id');
            $table->integer('category_id');
            $table->integer('suppler_id');
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
        Schema::dropIfExists('medicins');
    }
}
