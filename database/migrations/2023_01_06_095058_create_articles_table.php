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
        if (!Schema::hasTable('articles')) {
            Schema::create('articles', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->text('full_text');
                $table->foreignId('category_id')->nullable()->constrained();
                $table->timestamps();
            });
        }
        else {
            Schema::table('articles', function (Blueprint $table) {
                $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('set null');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
