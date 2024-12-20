<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('past_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organization')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->date('date');
            $table->string('location');
            $table->string('poster');
            $table->string('picture');
            $table->text('report');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('past_events');
    }
};
