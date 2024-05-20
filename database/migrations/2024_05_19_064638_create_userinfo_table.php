<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoTable extends Migration
{
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->string('user_firstname');
            $table->string('user_lastname');
            $table->string('user_middlename')->nullable();
            $table->date('user_bdate')->nullable();
            $table->string('user_address')->nullable();
            $table->string('user_contact_num')->nullable();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}
