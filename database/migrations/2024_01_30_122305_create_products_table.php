<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
    // database/migrations/create_products_table.php

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->timestamp('creation_date')->useCurrent();
        $table->unsignedBigInteger('category_id');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        $table->string('image')->nullable();
        $table->timestamps();
    });
}

};
