<?php

use App\Models\User;
use App\Models\CommunityCategory;
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
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('community_name', 100);
            $table->text('community_description');
            $table->text('community_contact');
            $table->text('community_logo');
            $table->foreignIdFor(CommunityCategory::class);
            $table->foreignIdFor(User::class);
            $table->timestamps();

            $table->foreign('community_category_id')->references('id')->on('community_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('communities');
    }
};
