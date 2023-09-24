<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_no', 150);
            $table->string('subject', 150);
            $table->string('type', 15);
            $table->string('remarks', 60);
            $table->string('division_id', 11);
            $table->string('creator_id', 11);
            $table->string('route_to_division_id', 11);
            $table->string('acted_by_user_id', 11);
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
        Schema::dropIfExists('documents');
    }
};
