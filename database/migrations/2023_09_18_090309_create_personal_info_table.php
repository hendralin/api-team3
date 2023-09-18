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
        Schema::create('personal_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->index('FK_personal_info_users');
            $table->unsignedBigInteger('company_id')->index('FK_personal_info_companies');
            $table->string('firstname');
            $table->string('lastname');
            $table->boolean('gender')->comment('0=female, 1=male');
            $table->string('place_of_birth');
            $table->date('birth_date');
            $table->string('mobile_phone', 50);
            $table->string('phone', 50)->nullable();
            $table->boolean('martial_status')->comment('0=single, 1=married, 2=widow, 3=widower');
            $table->boolean('religion')->comment('1=islam, 2=catholic, 3=christian, 4=buddha, 5=hindu, 6=confucius, 7=others');
            $table->integer('id_number');
            $table->boolean('id_type')->comment('1=ktp, 2=passport');
            $table->date('id_expiration_date');
            $table->text('citizen_id_address');
            $table->string('postal_code', 10)->nullable();
            $table->text('residential_address');
            $table->char('blood_type', 1)->comment('a, b, ab, o');
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
        Schema::dropIfExists('personal_info');
    }
};
