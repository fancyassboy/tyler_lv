<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTyqaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ty_qa', function (Blueprint $table) {
            $table->tinyInteger('per_id');
            $table->string('q_type');
            $table->string('char');
            $table->tinyInteger('achar');
            $table->date('q_dt');
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
