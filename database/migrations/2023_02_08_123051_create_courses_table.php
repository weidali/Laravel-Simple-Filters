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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->jsonb('title')->default('{"en": "", "fr": ""}');
            $table->jsonb('short_info')->default('{"en": "", "fr": ""}');
            $table->jsonb('description')->default('{"en": "", "fr": ""}');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('lang_id')->constrained();
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
        Schema::dropIfExists('courses');
    }
};
