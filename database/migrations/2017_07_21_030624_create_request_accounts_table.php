<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('account_type_id')->nullable()->unsigned();
            $table->string('order_number')->nullable();
            $table->integer('account_number')->nullable();
            $table->string('account_password', 50)->nullable();
            $table->enum('status', ['approved', 'pending', 'request']);
            $table->string('nama', 30)->default('');
      			$table->string('tempat_lahir', 30)->default('');
      			$table->date('dob')->nullable();
      			$table->text('alamat')->nullable();
      			$table->enum('tipe_id', ['KTP', 'SIM', 'Passport'])->nullable();
      			$table->string('no_id', 20)->default('');
      			$table->string('pengalaman', 50)->default('');
      			$table->string('tujuan', 50)->default('');
      			$table->string('npwp', 30)->default('');
      			$table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
      			$table->enum('status_perkawinan', ['tidak kawin', 'kawin', 'duda', 'janda']);
      			$table->string('nama_ibu', 30)->default('');
      			$table->enum('status_rumah', ['pribadi', 'keluarga', 'sewa/kontrak']);
      			$table->string('telp_rumah', 20)->default('');
      			$table->string('kode_pos', 6)->default('');
      			$table->enum('keluarga_kbi', ['tidak', 'ya']);
      			$table->enum('pailit', ['tidak', 'ya']);
      			$table->string('nama_darurat', 30)->default('');
      			$table->string('telp_darurat', 20)->default('');
      			$table->string('hubungan', 50)->default('');
      			$table->text('alamat_darurat')->nullable();
      			$table->enum('pekerjaan', ['swasta', 'wiraswasta', 'irt', 'negeri', 'mahasiswa']);
      			$table->string('nama_perusahaan', 100)->default('');
      			$table->string('bidang_usaha', 100)->default('');
      			$table->string('jabatan', 100)->default('');
				$table->string('lama_bekerja',2)->nullable();
				$table->text('alamat_kantor')->nullable();
				$table->string('kode_pos_kantor',6)->nullable();
      			$table->string('telp_kantor',20)->nullable();
      			$table->string('kantor_sebelum',2)->nullable();
      			$table->string('nama_bank',100)->nullable();
      			$table->string('cabang',100)->nullable();
      			$table->string('telp_bank',20)->nullable();
      			$table->string('no_rek',20)->nullable();
      			$table->string('nama_rek',30)->nullable();
      			$table->string('jenis_tabungan',50)->nullable();
      			$table->string('id_card',100)->nullable();
      			$table->string('rek_koran',100)->nullable();
      			$table->string('foto',100)->nullable();
				$table->enum('approval_yes', ['tidak','ya']);

            $table->timestamps();
        });

        Schema::table('request_accounts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_accounts');
    }
}
