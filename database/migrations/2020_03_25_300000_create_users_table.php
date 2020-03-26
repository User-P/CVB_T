<?php

use App\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('status')->default(User::ACTIVE);
            $table->string('name');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('gender');
            $table->string('phone')->unique();
            $table->string('date_of_birth');
            $table->string('type')->default(User::NO_ADMIN);
            $table->string('image');
            $table->string('email')->unique();
            $table->string('password');            
            $table->string('address');
            $table->integer('entity_id')->unsigned();
            $table->foreign('entity_id')->references('id')->on('entities');
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities');
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
        Schema::dropIfExists('users');
    }
}
