<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_job', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('location')->nullable();
            $table->string('employment')->nullable();
            $table->string('company_name')->nullable();
            $table->string('feature_job')->nullable();
            $table->string('salary')->nullable();
            $table->string('logo_image')->nullable();
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
        Schema::dropIfExists('post_job');
    }
}
