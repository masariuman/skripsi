<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArtikelPesantren extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('id_kategori')->unsigned()->nullable();
            $table->string('judul_artikel', 255);
            $table->text('isi');
            $table->string('gambar')->nullable();
            $table->string('nama_gambar')->nullable();
            $table->string('status', 20);
            $table->timestamps();

            $table->foreign('id_kategori')
                    ->references('id')
                    ->on('kategori')
                    ->onDelete('set null')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('artikel', function (Blueprint $table) {
            $table->dropForeign('artikel_id_kategori_foreign');
        });
        
        Schema::dropIfExists('artikel');
    }
}
