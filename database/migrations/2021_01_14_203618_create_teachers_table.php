<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('nip', 50)->unique();
            $table->string('fotopath')->unique();
            $table->foreignId('classess_id_kelas')->nullable();
            $table->string('nama', 50);
            $table->string('jabatan', 50);
            $table->foreignId('user_id')->nullable();
            $table->string('email',50);
            $table->enum('jenis_kelamin', ['Laki-laki','Perempuan']);
            $table->string('pendidikan', 50);
            $table->string('alamat', 191);
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
        Schema::dropIfExists('teachers');
    }
}
