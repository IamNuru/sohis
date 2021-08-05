<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password')->nullable();
            $table->string('email')->nullable();
            $table->string('class_id')->nullable();
            $table->string('position')->nullable();
            $table->string('qualification')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->string('role')->default('Class Teacher');
            $table->enum('gender',['m','f']);
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
        Schema::dropIfExists('teachers');
    }
}
