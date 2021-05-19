<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();

            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('year')->nullable();
            $table->string('age_limit')->nullable();
            $table->string('image')->nullable();;
            $table->enum('is_active', ['Yes', 'No'])->nullable()->default('Yes');
            $table->string('cinebazurl')->nullable();
            $table->string('trailler_button_url')->nullable();
            $table->boolean('menu_show')->nullable();
            $table->boolean('page_show')->nullable();
            $table->boolean('home_show')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('banners');
    }
}
