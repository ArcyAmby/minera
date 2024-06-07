<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventoryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inv_type_id'); // Add this line
            $table->string('inv_name');
            $table->string('inv_brand');
            $table->text('inv_description');
            $table->timestamps();

            $table->foreign('inv_type_id')->references('id')->on('inventory_types')->onDelete('cascade'); // Add this line
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inventory_infos', function (Blueprint $table) {
            $table->dropForeign(['inv_type_id']); // Add this line
        });
        Schema::dropIfExists('inventory_infos');
    }
}
