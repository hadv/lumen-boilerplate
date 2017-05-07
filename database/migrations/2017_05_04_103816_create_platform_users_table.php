<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlatformUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('platform_users', function (Blueprint $table) {
            $table->string('system_id', 100);
            $table->primary('system_id', 'platform_users_pk');
            $table->string('user_id', 100);
            $table->string('password', 200);
            $table->string('salt', 20);
            $table->string('full_name', 100)->nullable();
            $table->string('email_address', 255)->nullable();
            $table->unique('email_address', 'email_address_unique_idx');
            $table->string('facebook_id', 100)->nullable();
            $table->char("gender", 1)->nullable();
            $table->dateTime('created_at')->nullable();
            $table->string('created_by', 100)->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('updated_by', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('platform_users');
    }
}
