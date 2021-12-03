<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_points', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->bigInteger('userId')->index();
            $table->bigInteger('post_id')->index();
            $table->bigInteger('point')->index();
            $table->date('CREATED_AT');
            $table->date('UPDATED_AT');

            $table->foreign('post_id')
            ->references('id')
            ->on('posts')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_points');
    }
}
