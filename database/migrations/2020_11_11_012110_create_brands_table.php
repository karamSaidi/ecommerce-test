<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->boolean('status')->default(1);
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('brands_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands', 'id')->cascadeOnDelete();
            $table->string('locale');
            $table->string('name');
            $table->unique(['locale', 'brand_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands_translations');
        Schema::dropIfExists('brands');
    }
}
