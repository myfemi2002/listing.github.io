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

            $table->id();
            $table->string('name');
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('photo')->nullable();
            $table->string('gender')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('referral_code')->nullable()->unique();
            $table->string('last_login_ip')->nullable();
            $table->timestamp('join_date')->nullable();
            $table->enum('member_status',['free','vip'])->default('free');
            $table->enum('verification_status',['unverified','verified'])->default('unverified');
            $table->enum('role',['admin','agent','user'])->default('user');
            $table->enum('status',['active','inactive','supsended'])->default('active');
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
