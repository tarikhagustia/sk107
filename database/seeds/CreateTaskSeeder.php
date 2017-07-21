<?php

use Illuminate\Database\Seeder;
use App\Models\Task;
class CreateTaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $task = [
        [
          'task_title' => 'Profile Perusahaan',
          'task_form_number' => '107.PBK.01',
          'task_action' => 'ajax',
          'task_url' => 'admin/account/real-account/form/107-PBK-01',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.01)'
        ],
        [
          'task_title' => 'Pernyataan Telah Melakukan Simulasi Perdagangan Berjangka',
          'task_form_number' => '107.PBK.02.01',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-02-01',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.02.01)'
        ],
        [
          'task_title' => 'Pernyataan Telah Berpengalaman Dalam Melaksanakan Transaksi Perdagangan Berjangka',
          'task_form_number' => '107.PBK.02.02',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-02-02',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor :107.PBK.02.02)'
        ],
        [
          'task_title' => 'Form Aplikasi Pembukaan Rekening Transaksi Secara Elektronik On-Line',
          'task_form_number' => '107.PBK.03',
          'task_action' => 'http',
          'task_url' => '/admin/account/real-account/form/107-PBK-03',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor :107.PBK.03)'
        ],
        [
          'task_title' => 'Dokumen Pemberitahuan Adanya Resiko Yang Harus Disampaikan Oleh Pialang Berjangka Untuk Transaksi Kontrak Derivatif Dalam Sistem Perdagangan Alternatif',
          'task_form_number' => '107.PBK.04.02',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-04-02',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.04.02)'
        ],
        [
          'task_title' => 'Perjanjian Pemberian Amanat Secara Elektronik On-Line Untuk Transaksi Kontrak Derivatif
 Dalam Sistem Perdagangan Alternatif',
          'task_form_number' => '107.PBK.05.02',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-05-02',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.05.02)'
        ],
        [
          'task_title' => 'Peraturan Perdagangan (Trading Rules) dalam Sistem Aplikasi Penerimaan Nasabah
 Secara Elektronik On-Line',
          'task_form_number' => '107.PBK.06',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-06',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.06)'
        ],
        [
          'task_title' => 'Pernyataan Bertanggung Jawab Atas Kode Akses Transaksi Nasabah (Personal Access Password)',
          'task_form_number' => '107.PBK.07',
          'task_action' => 'ajax',
          'task_url' => '/admin/account/real-account/form/107-PBK-07',
          'task_description' => 'Baca Lebih Lanjut (Formulir Nomor : 107.PBK.07)'
        ],
      ];


      foreach ($task as $key => $value) {
        Task::create($value);
      }

    }
}
