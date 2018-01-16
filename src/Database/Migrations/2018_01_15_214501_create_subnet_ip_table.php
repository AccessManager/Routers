<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubnetIpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('network_subnet_ips', function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('network_subnet_id');
            $table->unsignedInteger('address');
            $table->unsignedInteger('user_id')->nullable();
            $table->timestamp('assigned_on')->nullable();

            $table->foreign('network_subnet_id')
                ->references('id')->on('network_subnets')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('network_subnet_ips');
    }
}
