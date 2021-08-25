<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->mediumText('bio');
            $table->smallInteger('contactno');
            $table->string('profile_image');
            $table->smallInteger('payid');
            $table->boolean('agree');


            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::statement(
            'ALTER TABLE users ADD FULLTEXT fulltext_index(name, email, bio)'
        );
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
