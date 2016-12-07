<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTychatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ty_chat', function (Blueprint $table) {
            $table->tinyInteger('per_id1');
            $table->tinyInteger('per_id2');
            $table->increments('chat_id');
            $table->string('chat_descr');
            $table->date('chat_dt');
            $table->tinyInteger('version');
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
        //
    }
}
