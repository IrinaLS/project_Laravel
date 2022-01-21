<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sourse', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
			$table->string('site', 255);			
			$table->enum('status', ['DRAFT', 'ACTIVE', 'BLOCKED'])->default('ACTIVE');			
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
        Schema::dropIfExists('sourse');
    }
}
