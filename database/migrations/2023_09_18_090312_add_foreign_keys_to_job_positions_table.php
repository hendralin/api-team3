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
        Schema::table('job_positions', function (Blueprint $table) {
            $table->foreign(['job_level_id'], 'FK_job_positions_job_levels')->references(['id'])->on('job_levels')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['company_id'], 'FK_job_positions_companies')->references(['id'])->on('companies')->onUpdate('NO ACTION')->onDelete('CASCADE');
            $table->foreign(['organization_id'], 'FK_job_positions_organizations')->references(['id'])->on('organizations')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_positions', function (Blueprint $table) {
            $table->dropForeign('FK_job_positions_job_levels');
            $table->dropForeign('FK_job_positions_companies');
            $table->dropForeign('FK_job_positions_organizations');
        });
    }
};
