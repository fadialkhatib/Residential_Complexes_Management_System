<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('userName', 100)->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phonNumber', 100)->unique();
            $table->text('fc_Token')->unique();
            $table->enum('gender', array('Male', 'Female'));
            $table->string('dateOfBirth', 100);
            $table->boolean('acountState');
            $table->string('lastOnline');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
};
