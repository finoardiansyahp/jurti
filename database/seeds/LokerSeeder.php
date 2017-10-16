<?php

use Illuminate\Database\Seeder;

use App\Loker;

class LokerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loker::create([
            'id' => '1',
            'judul' => 'GoJek',
            'keterangan' => 'Bermula di tahun 2010 sebagai perusahaan transportasi roda dua melalui panggilan telepon, GO-JEK kini telah tumbuh menjadi perusahaan penyedia layanan transportasi dan gaya hidup berbasis aplikasi.',
            'gambar' => '4.jpg',
        ]);

        Loker::create([
            'id' => '2',
            'judul' => 'Tokopedia',
            'keterangan' => 'Dimulai dari Tokopedia, siapa pun dapat memenuhi semua kebutuhan hariannya dalam satu tempat, sekaligus dapat membangun bisnis secara mudah dan gratis.',
            'gambar' => '5.jpg',
        ]);

        Loker::create([
            'id' => '3',
            'judul' => 'Bukalapak',
            'keterangan' => 'Bukalapak.com adalah sarana jual/beli online di Indonesia yang paling nyaman & aman. Didirikan pada tahun 2010 oleh anak-anak muda Indonesia yang ingin membantu mengembangkan UMKM di Indonesia untuk meningkatkan kesejahteraan masyarakat. Kini Bukalapak.com memiliki lebih dari 100 ribu penjual dan 700 ribu barang. Kategori produk yang dimiliki Bukalapak.com pun beraneka-ragam.',
            'gambar' => '6.jpg',
        ]);

        Loker::create([
            'id' => '4',
            'judul' => 'Shopee',
            'keterangan' => 'Shopee hadir di Indonesia untuk membawa pengalaman berbelanja baru. Kami memfasilitasi penjual untuk berjualan dengan mudah serta membekali pembeli dengan proses pembayaran yang aman dan pengaturan logistik yang terintegrasi!',
            'gambar' => '7.jpg',
        ]);

    }
}
