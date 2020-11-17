<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->boolean('is_translatable')->default(false);
            $table->boolean('status')->default(false);
            $table->text('plain_value')->nullable();
            $table->timestamps();
        });

        Schema::create('setting_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('setting_id')->constrained('settings', 'id')->cascadeOnDelete();
            $table->string('locale')->index();
            $table->longText('value')->nullable();
            $table->unique(['setting_id', 'locale']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('setting_translations');
        Schema::dropIfExists('settings');
    }
}
