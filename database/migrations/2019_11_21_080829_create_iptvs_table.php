<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIptvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iptvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rooms_id');
            $table->string('date');
            $table->string('remote');
            $table->string('noteremote');
            $table->string('stb');
            $table->string('notestb');
            $table->string('ir');
            $table->string('noteir');
            $table->string('powersupply');
            $table->string('remark');
            $table->string('macaddress');
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
        Schema::dropIfExists('iptvs');
    }
}
