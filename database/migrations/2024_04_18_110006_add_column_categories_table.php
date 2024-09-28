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
       Schema::table('categories',function (Blueprint $table){
          $table->string('image3')->after('image2');
          $table->string('image4')->after('image3');
          $table->string('image5')->after('image4');
          $table->string('image6')->after('image5');
          $table->string('image7')->after('image6');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
