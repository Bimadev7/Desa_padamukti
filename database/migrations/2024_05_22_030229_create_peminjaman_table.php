<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class UpdateStatusColumnInPeminjamanTable extends Migration
{
    public function up()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->string('status', 20)->change(); // Sesuaikan panjangnya sesuai kebutuhan
        });
    }

    public function down()
    {
        Schema::table('peminjaman', function (Blueprint $table) {
            $table->string('status', 10)->change(); // Ubah kembali jika diperlukan
        });
    }
}
