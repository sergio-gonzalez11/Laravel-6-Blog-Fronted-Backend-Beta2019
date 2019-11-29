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
            $table->bigIncrements('id');
            
            $table->string('image');
            $table->string('title');
            $table->longText('description_post');
            $table->longText('recomendations');
            // $table->timestamp('date');

            $table->unsignedBigInteger('user_id'); // Relación con Usuario
            $table->unsignedBigInteger('category_id'); // Relación con Categoria
            $table->unsignedBigInteger('state_id')->default(1);  //Relacion con Estado

            $table->foreign('user_id')->references('id')->on('users');
            
            $table->foreign('category_id')->references('id')->on('categories');

            $table->foreign('state_id')->references('id')->on('states');
            
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
