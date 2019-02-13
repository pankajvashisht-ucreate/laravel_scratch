<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('author_name')->index();
            $table->string('book_name');
            $table->text('description');
            $table->integer('category_id');
            $table->integer('user_id');
            $table->timestamp('updated_at');
            $table->timestamp('created_at');
            $table->timestamp('delete_at')->nullable();
            //$table->foreign('category_id')->references('id')->on('Category')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
