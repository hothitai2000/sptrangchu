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
        Schema::create('account', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('password');
            $table->boolean('verify');
            $table->boolean('role');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
        
            $table->increments('id');
            $table->unsignedinteger('account_id');
            $table->foreign('account_id')->references('id')->on('account');
            $table->string('email')->unique();
            $table->string('full_name');
            $table->timestamps('create_at')->nullable();
            $table->integer('phone');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table -> string('name');
            $table -> string('avatar');
            $table -> date('premiere_date');
            $table -> string('country');
            $table -> string('description');
            $table->timestamps();
        });
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::create('schedule', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->unsigndinteger('room_id');
            $table->foreign('room_id')->reference('id')->on('rooms');
            $table->date('movies_date');
            $table->time('time_begin');
            $table->time('time_end');
            $table->timestamps();
        });

        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('schedule_id');
            $table->foreign('schedule_id')->references('id')->on('schedule');
            $table->boolean('status');
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->datetime('book_date');
            $table->string('code');
            $table->decimal('total_price');
            $table->timestamps();

        });
        Schema::create('likes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedinteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::create('movies_cat', function (Blueprint $table) {
            $table->unsignedInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('categories');
            $table->unsignedInteger('movie_id');
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->timestamps();
        });
 
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('CINEMA');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('invoices');
        Schema::dropIfExists('users');
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('movie_cat');
        Schema::dropIfExists('schedule');
        Schema::dropIfExists('room');
        Schema::dropIfExists('movies');
        Schema::dropIfExists('accounts');
    }
};
