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
        Schema::create('kurtis', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('qad');
            $table->string('shana');
            $table->string('astin');
            $table->string('baghal');
            $table->string('kamar');
            $table->string('soorin');
            $table->string('tir_pesht');
            $table->string('bala_tana');
            $table->string('bazo');
            $table->string('moch');
            $table->string('tukma');
            $table->string('chak');
            $table->string('yakhan');
            $table->string('daman')->nullable();
            $table->integer('jami_quantity');
            $table->integer('waskat_quantity');
            $table->integer('kurti_quantity');
            $table->date('order_date');
            $table->date('finish_date');
            $table->decimal('total_price', 10, 2);
            $table->decimal('paid', 10, 2);
            $table->decimal('remain', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurtis');
    }
};
