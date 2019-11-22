<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('rooms_id');
            $table->string('date');
            $table->string('cable');
            $table->string('notecable');
            $table->string('dnd');
            $table->string('notednd');
            $table->string('bel');
            $table->string('notebel');
            $table->string('keytag');
            $table->string('notekeytag');
            $table->string('reader');
            $table->string('notereader');
            $table->string('safetybox');
            $table->string('notesafetybox');
            $table->string('remark');
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
        Schema::dropIfExists('onities');
    }
}
