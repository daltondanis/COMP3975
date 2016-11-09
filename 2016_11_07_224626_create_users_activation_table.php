<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersActivationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // this is how you can create a table
        Schema::create('user_activations', function (Blueprint $table) {
            // Incrementing ID to the table (primary key)
            $table->increments('id');  // primary key
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('token')->index();
            $table->timestamp('created_at');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_activated')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("user_activations");

        Schema::table('users', function(Blueprint $table) {
            $table->dropColumn("is_activated");
        });
    }
}

