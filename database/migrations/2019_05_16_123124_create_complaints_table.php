<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('region_id')->nullable()->index();
            $table->unsignedInteger('complaint_type_id')->nullable()->index();
            $table->unsignedInteger('neighborhood_citizen_id')->nullable()->index();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
            $table->string('sender_full_name')->nullable();
            $table->string('sender_phone')->nullable();
            $table->string('sender_email')->unique();
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
        Schema::dropIfExists('complaints');
    }
}
