<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('votes')->default(1);

            // make foreign key 1
            // $table->unsignedBigInteger('role_id');
            // $table->foreign('role_id')->references('id')->on('role');

            // make foreign key 2
            $table->foreignId('role_id')->constrained('role')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
