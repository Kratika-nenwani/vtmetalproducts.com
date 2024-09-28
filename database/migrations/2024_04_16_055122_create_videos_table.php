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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->longText('iframe1');
            $table->longText('iframe2');
            $table->longText('iframe3');
            $table->longText('iframe4');
            $table->longText('iframe5');
            $table->longText('iframe6');
            $table->longText('iframe7');
            $table->longText('iframe8');
            $table->longText('iframe9');
            $table->longText('iframe10');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
