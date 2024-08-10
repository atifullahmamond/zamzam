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
        Schema::create('waskats', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('qad');
            $table->string('shana');
            $table->string('chahati_baghal');
            $table->string('kamar');
            $table->string('hip_soorin');
            $table->string('yakhan');

            $table->string('shana_type');
            $table->string('tukma');
            $table->string('kalar');
            $table->string('daman_gol');
            $table->boolean('jeb_Gul')->nullable();
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
        Schema::dropIfExists('waskats');
    }
};
