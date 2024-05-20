<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inv_id');
            $table->decimal('purchase_price', 8, 2);
            $table->string('purchase_type');
            $table->integer('purchase_quantity');
            $table->unsignedBigInteger('order_id')->nullable(); // Add order_id column

            $table->timestamps();

            // Foreign key constraints
            $table->foreign('inv_id')->references('id')->on('inventories')->onDelete('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign(['inv_id']);
            $table->dropForeign(['order_id']); // Drop foreign key constraint
        });

        Schema::dropIfExists('purchases');
    }
}
