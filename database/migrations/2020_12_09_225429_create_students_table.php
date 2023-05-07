<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 50)->unique();
            $table->string('nis', 50)->unique();
            $table->string('fotopath')->nullable();
            $table->foreignId('classess_id_kelas')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->string('nama', 50);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->string('agama', 50);
            $table->string('alamat', 191);
            $table->string('nama_ibu', 50);
            $table->string('no_tlp', 50);
            $table->enum('status', ['Aktif','Tidak Aktif'])->nullable();
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
        Schema::dropIfExists('students');
    }
}
