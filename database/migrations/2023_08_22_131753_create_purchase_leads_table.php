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
        Schema::create('purchase_leads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->nullable()->default(0);
            $table->decimal('price',10,2)->nullable()->default(0);
            $table->string('user_name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
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
        Schema::dropIfExists('purchase_leads');
    }
};
