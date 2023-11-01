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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_type_id');
            $table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('cascade');

            $table->string('property_amenity_id');

            $table->string('prt_type'); //sale or rent

            $table->string('property_name')->nullable();
            $table->string('property_slug')->nullable();
            $table->string('property_code')->nullable();

            $table->string('property_status')->nullable(); //For Sale
            $table->string('location')->nullable();

            $table->decimal('lowest_price', 8, 2)->nullable();
            $table->decimal('max_price', 8, 2)->nullable();

            $table->string('property_thumbnail');
            $table->text('description')->nullable();

            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('property_size')->nullable();
            $table->string('property_video')->nullable();
            // $table->integer('areas')->nullable();
            $table->integer('garage')->nullable();
            $table->string('garage_size')->nullable();

            $table->string('cooling')->nullable();
            $table->string('heating_type')->nullable();
            $table->string('kitchen_features')->nullable();
            $table->string('exterior')->nullable();
            $table->string('swimming_pool')->nullable();
            $table->string('elevator')->nullable();
            $table->string('fireplace')->nullable();
            $table->string('free_wifi')->nullable();

            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->integer('year_built')->nullable();


            $table->string('featured')->nullable();
            $table->string('hot')->nullable();
            $table->integer('agent_id')->nullable();
            // $table->string('status')->default(0);
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
