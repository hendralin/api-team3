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
        Schema::create('employment_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personal_info_id')->index('FK_employment_info_personal_info');
            $table->string('employee_id', 10);
            $table->unsignedBigInteger('job_position_id')->index('FK_employment_info_job_positions');
            $table->boolean('employment_status')->comment('0=contract, 1=permanent');
            $table->date('join_date');
            $table->string('picture', 50);
            $table->char('status', 1)->default('1')->comment('0=offboarding, 1=onboarding');
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
        Schema::dropIfExists('employment_info');
    }
};
