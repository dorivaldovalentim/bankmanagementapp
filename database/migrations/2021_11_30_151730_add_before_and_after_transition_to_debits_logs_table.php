<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBeforeAndAfterTransitionToDebitsLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('debits_logs', function (Blueprint $table) {
            $table->double('before_transation')->after('amount')->nullable();
            $table->double('after_transation')->after('before_transation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('debits_logs', function (Blueprint $table) {
            //
        });
    }
}
