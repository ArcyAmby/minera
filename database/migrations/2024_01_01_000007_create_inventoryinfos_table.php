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
            $table->unsignedBigInteger('inv_type_id');
            $table->string('inv_name');
            $table->string('inv_brand');
            $table->text('inv_description');
            $table->string('inv_image'); // New column for inventory image
            $table->timestamps();

            $table->foreign('inv_type_id')->references('id')->on('inventory_types')->onDelete('cascade');
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
            $table->dropForeign(['inv_type_id']);
        });
        Schema::dropIfExists('inventory_infos');
    }
}
