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
        Schema::table('employment_info', function (Blueprint $table) {
            $table->foreign(['personal_info_id'], 'FK_employment_info_personal_info')->references(['id'])->on('personal_info')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['job_position_id'], 'FK_employment_info_job_positions')->references(['id'])->on('job_positions')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employment_info', function (Blueprint $table) {
            $table->dropForeign('FK_employment_info_personal_info');
            $table->dropForeign('FK_employment_info_job_positions');
        });
    }
};
