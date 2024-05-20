<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryTable extends Migration
{
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('inv_code');
            $table->string('inv_type');
            $table->string('inv_name');
            $table->string('inv_brand');
            $table->text('inv_description');
            $table->integer('inv_quantity');
            $table->string('inv_delivered_by');
            $table->decimal('inv_price', 10, 2);
            $table->unsignedBigInteger('inv_added_by');
            $table->foreign('inv_added_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('inventory');
    }
}
