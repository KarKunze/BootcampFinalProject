<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('title',256);
            // $table->string('subtitle',100)->nullable;
            $table->string('slug')->nullable($value = true);
            $table->text('body',1000);
            $table->boolean('status')->default(1);
            $table->unsignedinteger('creator_id');
            $table->foreign('creator_id')->references('id')->on('users');
            $table->integer('category_id')->references('id')->on ('categories');
            $table->integer('tag')->nullable($value = true);
            $table->string('image')->nullable($value = true);
            $table->integer('like')->nullable($value = true);
            $table->integer('dislike')->nullable($value = true);
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
        Schema::dropIfExists('posts');
    }
}
