<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryInfosTable extends Migration
{
    public function up()
    {
        Schema::create('inventory_infos', function (Blueprint $table) {
            $table->id();
            $table->string('inv_type');
            $table->string('inv_name');
            $table->string('inv_brand');
            $table->text('inv_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory_infos');
    }
}
