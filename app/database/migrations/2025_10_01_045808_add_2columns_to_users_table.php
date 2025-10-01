<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add2columnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('reset_password_access_key')->nullable()->unique()->comment('パスワード再設定キー');
            $table->timestamp('reset_password_expire_at')->nullable()->comment('パスワード再設定キーの有効期限');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropUnique('reset_password_access_key'); //ユニーク制約削除
            $table->dropColumn('reset_password_access_key','reset_password_expire_at'); //カラム削除
        });
    }
}
