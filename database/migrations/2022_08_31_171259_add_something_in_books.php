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
        Schema::table('books', function (Blueprint $table) {
            // string型（デフォルト255, 第2引数にカラムの長さを指定します）
            $table->string('name', 100);
            $table->string('name');
            // テキスト型
            $table->text('description');
            // idを指定します。autoincrementで、bigintのunsignedになります
            $table->id();
            // int型（tinyint、int、small、big）
            $table->tinyInteger('status_code');
            $table->integer('status_code');
            $table->smallInteger('status_code');
            $table->bigInteger('status_code');
            // created_atとupdated_atが追加されます
            $table->timestamps();
            // boolean型（true/false）
            $table->boolean('is_active');
            // char型（第2引数にカラムの長さを指定します）
            $table->char('name', 100);
            $table->char('name'); // length指定していない場合は、255
            // dateTime型
            $table->dateTime('sending_at');
            // date型
            $table->date('created_at');
            // ソフトデリート
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            //
        });
    }
};
