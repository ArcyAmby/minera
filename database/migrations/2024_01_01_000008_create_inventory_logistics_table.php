<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryLogisticsTable extends Migration
{
    public function up()
    {
        Schema::create('inventory_logistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inventory_info_id');
            $table->string('inv_code');
            $table->string('inv_measurement');
            $table->integer('inv_quantity');
            $table->string('inv_delivered_by');
            $table->decimal('inv_price', 10, 2);
            $table->unsignedBigInteger('inv_added_by');
            $table->foreign('inv_added_by')->references('id')->on('users');
            $table->foreign('inventory_info_id')->references('id')->on('inventory_infos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory_logistics');
    }
}
