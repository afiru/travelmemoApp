<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->primary('id');
            $table->bigIncrements('id')->index();
            $table->date('travelDate')->index();
            $table->time('arrivalTime')->index();
            $table->float('stayTime', 10, 6)->index();
            $table->string('prefectures', 255);
            $table->string('interchange', 255);
            $table->integer('terms');
            $table->integer('subterms');
            $table->string('placeName', 255);
            $table->text('url');
            $table->integer('cost');
            $table->date('CREATED_AT');
            $table->date('UPDATED_AT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
