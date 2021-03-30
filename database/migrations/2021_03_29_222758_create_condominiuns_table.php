<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCondominiumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('condominiuns', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',250)->nullable(false);
            $table->text('description');
            $table->boolean('status')->default(1)->comment('if 0, disapears from selection');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('condominiuns');
    }
}
