<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'empleados', function (Blueprint $table) { 
                $table->id();
                $table->string('nombre');
                $table->string('apellido');
                $table->string('estado')                        ->nullable();
                $table->date('fechaNac');
                $table->bigInteger('DNI')->unique();
                $table->bigInteger('telefono')->unique();
                $table->string('direccion')                     ->nullable();
                $table->softDeletes();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
