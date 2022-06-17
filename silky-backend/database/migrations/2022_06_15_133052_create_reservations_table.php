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
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('reservation_id');
            $table->foreignId('user_id')->constrained('users');
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')
                  ->references('product_id')
                  ->on('products');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')
                  ->references('admin_id')
                  ->on('admins');
            $table->string('remark');
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
        Schema::dropIfExists('reservations');
    }
};
