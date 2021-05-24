<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('level')->nullable()->default(0);
            $table->string('hp')->nullable();
            $table->string('certify', 20)->nullable();
            $table->tinyInteger('adult')->nullable()->default(0);
            $table->timestamp('today_login')->dafault(Carbon::now())->index();
            $table->string('login_ip')->nullable();
            $table->string('ip')->nullable();
            $table->string('leave_date', 8)->nullable();
            $table->string('intercept_date', 8)->nullable();
            $table->timestamp('email_certify')->nullable();
            $table->text('memo')->nullable();
            $table->tinyInteger('mailing')->nullable()->default(0);
            $table->tinyInteger('sms')->nullable()->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->string('extra_1')->nullable();
            $table->string('extra_2')->nullable();
            $table->string('extra_3')->nullable();
            $table->string('extra_4')->nullable();
            $table->string('extra_5')->nullable();
            $table->string('extra_6')->nullable();
            $table->string('extra_7')->nullable();
            $table->string('extra_8')->nullable();
            $table->string('extra_9')->nullable();
            $table->string('extra_10')->nullable();

            $table->timestamp('updated_at')->default(Carbon::now())->index()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
