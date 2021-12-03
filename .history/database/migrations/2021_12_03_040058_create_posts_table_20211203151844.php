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
            $table->bigIncrements('id')->index();
            $table->date('travelDate')->index();
            $table->time('arrivalTime')->index();
            $table->float('stayTime', 10, 6)->index();
            $table->string('prefectures', 255);
            $table->string('interchange', 255);
            $table->integer('term');
            $table->integer('subTerm');
            $table->string('placeName', 255);
            $table->text('url');
            $table->integer('cost');
            $table->integer('pont_sum');
            $table->date('postDate');
            $table->date('postModified');
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
