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
        Schema::table('games', function (Blueprint $table) {
            // $table->string('email')->unique();
            // $table->string('email')->unique('test_email_unique');
            // $table->string('email')->index();
            // $table->string('email')->index('test_email_index');
            $table->index(['created_at', 'updated_at']); // 複数indexの生成
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('email');
        });
    }
};
