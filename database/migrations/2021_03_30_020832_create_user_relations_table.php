<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('user_relations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->unsignedBigInteger('condominium_id')->nullable(false);
            $table->unsignedBigInteger('apartment_id')->nullable(false);
            $table->boolean('isDeveloper')->default(0);
            $table->boolean('isAdministrator')->default(0);
            $table->boolean('isCondominiumManager')->default(0);
            $table->boolean('isOwner')->default(0);
            $table->boolean('isRenter')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('condominium_id')->references('id')->on('condominiuns');
            $table->foreign('apartaments')->references('id')->on('apartaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('user_relations');
    }
}
