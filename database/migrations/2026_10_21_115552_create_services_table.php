<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

public function up(): void
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();

        // Service names in Indonesian and English
        $table->string('name_id');
        $table->string('name_en');

        // Short descriptions displayed on the cards
        $table->text('description_id')->nullable();
        $table->text('description_en')->nullable();

        // Full descriptions displayed in the popup
        $table->longText('details_id')->nullable();
        $table->longText('details_en')->nullable();

        // Optional visual assets
        $table->string('icon')->nullable();
        $table->string('image_path')->nullable();

        // Control card order and visibility
        $table->unsignedInteger('sort_order')->default(0);
        $table->boolean('is_published')->default(false);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
