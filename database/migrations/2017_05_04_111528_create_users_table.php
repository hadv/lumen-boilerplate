<?php

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
            $table->bigIncrements('id');
            $table->string('email_address', 255)->nullable();
            $table->string('password', 255)->nullable();
            $table->string('salt', 10)->nullable();
            $table->integer('user_type')->default(1);
            $table->string('guest_id', 50)->nullable();
            $table->string('nick_name', 255)->nullable();
            $table->integer('nick_name_tag')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->unique('email_address');
            $table->unique('guest_id');
            $table->index('nick_name', 'nick_name_idx');
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
