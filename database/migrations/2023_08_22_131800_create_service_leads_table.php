<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_leads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable()->default(0);
            $table->bigInteger('city_id')->nullable()->default(0);
            $table->bigInteger('state_id')->nullable()->default(0);
            $table->string('product_code')->nullable();
            $table->string('invoice')->nullable();
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('zipcode')->nullable();
            $table->longText('address')->nullable();
            $table->enum('status', ['NEW', 'VISITED', 'SOLVED', 'CANCELLED'])->nullable()->default('NEW');
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
