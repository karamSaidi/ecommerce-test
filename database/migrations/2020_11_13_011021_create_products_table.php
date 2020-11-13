<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->nullable()->constrained('brands', 'id')->onDelete('set null');
            $table->decimal('price', 18, 4)->unsigned();
            $table->decimal('special_price', 18, 4)->unsigned()->nullable();
            $table->string('special_price_type')->nullable();
            $table->date('special_price_start')->nullable();
            $table->date('special_price_end')->nullable();
            $table->decimal('selling_price', 18, 4)->unsigned()->nullable();
            $table->string('sku')->nullable();
            $table->boolean('manage_stock');
            $table->integer('qty')->nullable();
            $table->boolean('in_stock');
            $table->integer('viewed')->unsigned()->default(0);
            $table->boolean('status');

            $table->timestamps();
        });

        Schema::create('product_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products', 'id')->cascadeOnDelete();
            $table->string('locale');
            $table->string('slug')->unique();
            $table->string('name');
            $table->longText('description');
            $table->Text('short_description')->nullable();
            $table->unique(['locale', 'product_id']);
        });

        Schema::create('product_categories', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products', 'id')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories', 'id')->cascadeOnDelete();

            $table->primary(['product_id', 'category_id']);
        });

        Schema::create('product_tags', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products', 'id')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('tags', 'id')->cascadeOnDelete();

            $table->primary(['product_id', 'tag_id']);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_tags');
        Schema::dropIfExists('product_categories');
        Schema::dropIfExists('product_translations');
        Schema::dropIfExists('products');
    }
}
