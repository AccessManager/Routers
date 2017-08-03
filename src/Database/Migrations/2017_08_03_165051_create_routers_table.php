<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routers', function(Blueprint $table){
            $table->increments('id');
            $table->string('nasname');
            $table->string('shortname')->nullable();
            $table->string('type')->default('other');
            $table->string('ports')->default(1812);
            $table->string('secret');
            $table->string('server')->nullable();
            $table->string('community')->nullable();
            $table->string('description')->default('Radius Client');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routers');
    }
}
