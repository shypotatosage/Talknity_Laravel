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
        Schema::create('community_categories', function (Blueprint $table) {
            $table->id();
            $table->string('category_name', 100);
            $table->text('category_logo');
            $table->text('category_color1');
            $table->text('category_color2');
            $table->text('category_color3');
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
        Schema::dropIfExists('community_categories');
    }
};
