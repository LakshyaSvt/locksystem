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
        Schema::create('purchase_leads', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->longText('products')->nullable();//product name and quantity
            $table->bigInteger('city_id')->nullable()->default(0);
            $table->bigInteger('state_id')->nullable()->default(0);
            $table->decimal('price', 10, 2)->nullable()->default(0);
            $table->string('zipcode')->nullable();
            $table->longText('address')->nullable();
            $table->enum('status', ['NEW', 'INSTALLED', 'CANCELLED'])->nullable()->default('NEW');
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
        Schema::dropIfExists('purchase_leads');
    }
};
