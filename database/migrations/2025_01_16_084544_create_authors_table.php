<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_authors_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birthday')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::table('authors', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }


}

