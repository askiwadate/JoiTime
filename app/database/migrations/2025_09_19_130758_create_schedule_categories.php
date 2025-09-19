<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScheduleCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('category_name',100);
            $table->string('emoji', 100)->charset('utf8mb4')->collation('utf8mb4_unicode_ci')->nullable();
            $table->tinyInteger('del_flg')->default(0)->comment('表示:0/非表示:1');
            $table->timestamps();

            $table->unique(['user_id','category_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_categories');
    }
}
