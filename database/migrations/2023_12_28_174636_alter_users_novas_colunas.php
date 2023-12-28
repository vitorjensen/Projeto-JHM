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
        //Para inserir nova coluna na tabela users
        Schema::table('users', function (Blueprint $table){

            $table->string('nickname', 150);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Para remover uma coluna da tabela user, fazer a operação inversa
        Schema::table('users', function(Blueprint $table){
            $table->dropColumn('nickname');
        });
    }
};
