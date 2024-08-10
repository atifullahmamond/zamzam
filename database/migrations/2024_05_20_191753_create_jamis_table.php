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
        Schema::create('jamis', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('phone_number');
            $table->string('qad');
            $table->string('astin');
            $table->string('shana');
            $table->string('yakhan');
            $table->string('chahati');
            $table->string('kamar');
            $table->string('baghal');
            $table->string('tumban');
            $table->string('pacha');
            $table->string('pati_widht');
            $table->string('pati_height');
            $table->string('bar_tumban');
            $table->string('qol');
            $table->string('kaf');
            $table->string('kaf_type');
            $table->string('astin_type');
            $table->string('kalar');
            $table->string('daman_type');
            $table->string('tukma');
            $table->boolean('jeb_roy')->nullable();
            $table->boolean('jeb_tumban')->nullable();
            $table->boolean('double_salaie')->nullable();
            $table->boolean('chamak_tar')->nullable();
            $table->boolean('double_tak')->nullable();
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
        Schema::dropIfExists('jamis');
    }
};
