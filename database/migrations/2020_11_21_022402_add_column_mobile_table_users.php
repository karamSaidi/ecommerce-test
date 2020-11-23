<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnMobileTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // add column mobile
        Schema::table('users', function (Blueprint $table) {
            $table->string('mobile')->index()->unique()->after('email');
            $table->timestamp('verified_at')->nullable()->after('mobile');
            // $table->renameColumn('email_verified_at', 'verified_at');
            // $table->renameColumn('email_verified_at', 'verified_at');
        });

        //drom email from users
        if (Schema::hasColumn('users', 'email')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('email');
                $table->dropColumn('email_verified_at');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('mobile');
        });
    }
}
