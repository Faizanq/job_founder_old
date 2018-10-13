<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('business_type')->nullable();
            $table->string('compny_name')->nullable();
            $table->text('about')->nullable();
            $table->string('location')->nullable();
            $table->string('profile_image')->nullable();
            $table->string('is_notify');
            $table->string('otp')->nullable();
            $table->string('is_mobile_verified')->default(0);
            $table->string('dob')->nullable();
            $table->string('gender')->default(User::NOT_SPECIFIED);
            $table->string('country_code')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('google_id')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('twiter_id')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('country')->default('Nigeria');
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('user_type')->default(User::USER);
            $table->string('email_verification_token_timeout');
            $table->string('verify_email_token')->nullable();
            $table->boolean('status')->default(User::ACTIVE);
            $table->string('access_token')->nullable();
            $table->string('verified')->default(User::UNVERIFIED_USER);
            $table->string('admin')->default(User::REGULAR_USER);
            $table->rememberToken();
            $table->timestamps();
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
        Schema::dropIfExists('users');
    }
}
