<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Source extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create(
            'source',
            function (Blueprint $table): void {
                $table->bigIncrements('id')->index();
                $table->unsignedBigInteger('a')->index();
                $table->unsignedBigInteger('b')->index();
                $table->unsignedBigInteger('c')->index();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('source');
    }
}
