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
        Schema::table('pedidos', function (Blueprint $table) {
            $table->string('nombre_del_cake', 255);
            $table->string('sabor', 100);
            $table->string('relleno', 100);
            $table->foreignId('decoracion_del_cake_id')->constrained('decoracions')->onDelete('cascade');
            $table->foreignId('medida_del_cake_id')->constrained('cake_medidas')->onDelete('cascade');
            $table->date('fecha_entrega');
            $table->string('nombre_del_cliente', 255);
            $table->string('telefono', 20);
            $table->decimal('precio', 8, 2);
            $table->time('hora');
            $table->foreignId('me_contacto_id')->constrained('medio_contactos')->onDelete('cascade');
            $table->text('nota')->nullanle();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedidos', function (Blueprint $table) {
            $table->dropForeign(['decoracion_del_cake_id']);
            $table->dropForeign(['medida_del_cake_id']);
            $table->dropForeign(['me_contacto_id']);
            $table->dropColumn([
                'nombre_del_cake',
                'sabor',
                'relleno',
                'decoracion_del_cake_id',
                'medida_del_cake_id',
                'fecha_entrega',
                'nombre_del_cliente',
                'telefono',
                'precio',
                'hora',
                'me_contacto_id',
                'nota'
            ]);
        });
    }
};
