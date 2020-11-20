<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->decimal('price', 18, 4)->unsigned()->default(0);
            $table->foreignId('attribute_id')->constrained('attributes', 'id')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products', 'id')->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('option_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('option_id')->constrained('options', 'id')->cascadeOnDelete();
            $table->string('locale');
            $table->string('name');
            $table->unique(['locale', 'option_id']);
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
        Schema::dropIfExists('option_translations');
        Schema::dropIfExists('options');
    }
}
