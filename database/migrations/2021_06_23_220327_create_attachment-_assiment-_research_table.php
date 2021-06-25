<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttachmentAssimentResearchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attachmentassiment', function (Blueprint $table) {
            $table->id();
            $table->string('attach');
            // $table->foreignId('assiment_id')->constrained();
            $table->unsignedBigInteger('assiment_id');

            $table->foreignId('student_id')->constrained();



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attachment-_assiment-_research');
    }
}
