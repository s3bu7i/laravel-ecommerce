<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBillingFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('stripe_id')->nullable()->after('remember_token');
            $table->string('pm_type')->nullable()->after('stripe_id');
            $table->string('pm_last_four')->nullable()->after('pm_type');
            $table->timestamp('trial_ends_at')->nullable()->after('pm_last_four');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('stripe_id');
            $table->dropColumn('pm_type');
            $table->dropColumn('pm_last_four');
            $table->dropColumn('trial_ends_at');
        });
    }

};