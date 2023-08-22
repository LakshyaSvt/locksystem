<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_leads', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_code')->nullable();
            $table->string('invoice')->nullable();
            $table->longText('user_address')->nullable();
            $table->string('user_name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->date('date')->nullable();
            $table->enum('status',['NEW','PURCHASED','CANCELLED'])->nullable()->default('NEW');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_leads');
    }
};
