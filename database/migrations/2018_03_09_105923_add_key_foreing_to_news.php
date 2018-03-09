<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddKeyForeingToNews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('news', function(Blueprint $table){
        $table->foreign('categoryId')->references('id')->on('categories');
        $table->foreign('userId')->references('id')->on('users');
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table){
          $table->dropForeign('news_category_id_foreign');
          $table->dropForeign('news_user_id_foreign');
        });
    }
}
