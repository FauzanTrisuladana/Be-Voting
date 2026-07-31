<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoterCodesTable extends Migration
{
    public function up()
    {
        Schema::create('voter_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->index();
            $table->boolean('already_vote')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voter_codes');
    }
}