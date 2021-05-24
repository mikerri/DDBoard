<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_login', function (Blueprint $table) {
            $table->id();
            $table->string('provider', 20)->nullable();
            $table->string('social_id')->nullable();
            $table->text('social_token')->nullable();
            $table->string('ip')->nullable();
            $table->timestamps();

            $table->bigInteger('user_id')->unsigned()->index();
            // users 테이블에 대한 참조키
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('social_login');
    }
}
