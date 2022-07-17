<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->string('stname');
            $table->string('stmelli');
            $table->string('stmobile');
            $table->string('stemail');
            $table->string('school');
            $table->string('title');
            $table->string('lang');
            $table->string('subject');
            $table->string('teachername');
            $table->string('teachermobile');
            $table->text('filename');
            $table->text('extfilename');
            $table->string('verifycode');
            $table->string('timestamp');
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
        Schema::dropIfExists('works');
    }
}
