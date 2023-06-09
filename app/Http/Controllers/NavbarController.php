<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function data_master()
    {
        $data = [
            [
                'judul' => 'Data User',
                'route' => 'user.index',
                'img' => 'team.png',
                'deskripsi' => 'ini adalah data user',
            ],
            [
                'judul' => 'Gudang',
                'route' => 'gudang.index',
                'img' => 'gudang.png',
                'deskripsi' => 'membuat dan mengelola data gudang',
            ],
            [
                'judul' => 'Data Proyek',
                'route' => 'proyek',
                'img' => 'clipboard.png',
                'deskripsi' => 'Membuat dan mengelola data proyek beserta anggaran pendapatan dan biaya.',
            ],
            [
                'judul' => 'Data Suplier',
                'route' => 'suplier.index',
                'img' => 'suplier.png',
                'deskripsi' => 'membuat dan menyunting data rekening',
            ],
            [
                'judul' => 'Data Satuan',
                'route' => 'user.index',
                'img' => 'measure-cup.png',
                'deskripsi' => 'Mengelola harta tetap, akun berkaitan, dan penyusutannya menurut metode yang tersedia.',
            ],
        ];
        $title = 'Data Master';
        return view('navbar.data_master', compact(['data', 'title']));
    }

    public function persediaan_barang()
    {
        $data = [

            [
                'judul' => 'Data Atk',
                'route' => 'produk.index',
                'img' => 'product.png',
                'deskripsi' => 'mengelola data barang atk',
            ],
            [
                'judul' => 'Data Peralatan',
                'route' => 'peralatan.index',
                'img' => 'peralatan.png',
                'deskripsi' => 'mengelola data barang peralatan',
            ],
            [
                'judul' => 'Aktiva',
                'route' => 'aktiva',
                'img' => 'buildings.png',
                'deskripsi' => 'Mengelola harta tetap, akun berkaitan, dan penyusutannya menurut metode yang tersedia.',
            ],
            [
                'judul' => 'Jurnal Penyesuaian',
                'route' => 'penyesuaian.index',
                'img' => 'journalism.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],
            [
                'judul' => 'Data Bahan Baku',
                'route' => 'bahan_baku.index',
                'img' => 'bahan_baku.png',
                'deskripsi' => 'mengelola data barang atk dan peralatan',
            ],
            [
                'judul' => 'Data Barang Dagangan',
                'route' => 'produk.index',
                'img' => 'product.png',
                'deskripsi' => 'mengelola data barang atk dan peralatan',
            ],
        ];
        $title = 'Persediaan Barang';
        return view('navbar.data_master', compact(['data', 'title']));
    }
    public function buku_besar()
    {
        $data = [

            [
                'judul' => 'Daftar Akun',
                'route' => 'akun',
                'img' => 'accounting.png',
                'deskripsi' => 'membuat dan menyunting data rekening',
            ],
            [
                'judul' => 'Saldo Awal',
                'route' => 'saldo_awal',
                'img' => 'report.png',
                'deskripsi' => 'membuat dan menyunting data rekening',
            ],
            [
                'judul' => 'Buku Besar',
                'route' => 'summary_buku_besar.index',
                'img' => 'ledger.png',
                'deskripsi' => 'Menampilkan ikhtisar jurnal dan perubahannya pada berbagai rekening.',
            ],
            [
                'judul' => 'Jurnal Umum',
                'route' => 'jurnal',
                'img' => 'newspaper.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],
            [
                'judul' => 'Profit & Loss',
                'route' => 'profit',
                'img' => 'profit.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],
            [
                'judul' => 'Cash Flow',
                'route' => 'controlflow',
                'img' => 'money-flow.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],
            [
                'judul' => 'Laporan Neraca',
                'route' => 'neraca',
                'img' => 'law-book.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],

            [
                'judul' => 'Jurnal Penutup',
                'route' => 'penutup.index',
                'img' => 'penutup.png',
                'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            ],
            // [
            //     'judul' => 'Control Flow',
            //     'route' => 'controlflow',
            //     'img' => 'evaluation.png',
            //     'deskripsi' => 'Mencatat berbagai transaksi keuangan dengan menetapkan langsung rekening di sisi debit dan kredit.',
            // ],
        ];
        $title = 'Buku Besar';
        return view('navbar.data_master', compact(['data', 'title']));
    }

    public function pembelian()
    {
        $data = [
            [
                'judul' => 'Pembelian',
                'route' => 'pembelian_bk',
                'img' => 'buy.png',
                'deskripsi' => 'membuat pengajuan pembelian ke pemasok',
            ]

        ];
        $title = 'Pembelian';
        return view('navbar.data_master', compact(['data', 'title']));
    }
    public function pembayaran()
    {
        $data = [
            [
                'judul' => 'Pembayaran',
                'route' => 'pembayaranbk',
                'img' => 'finance.png',
                'deskripsi' => 'membuat pengajuan pembelian ke pemasok',
            ],

        ];
        $title = 'Pembayaran';
        return view('navbar.data_master', compact(['data', 'title']));
    }
    public function penjualan()
    {
        $data = [
            [
                'judul' => 'Penjualan / Pembayaran',
                'route' => 'jual.index',
                'img' => 'invoice.png',
                'deskripsi' => 'mencatat faktur penjualan untuk pelanggan',
            ],
            // [
            //     'judul' => 'Daftar Piutang Usaha',
            //     'route' => 'faktur_penjualan',
            //     'img' => 'payment.png',
            //     'deskripsi' => 'Menampilkan daftar perinci piutang dagang tiap pelanggan yang berasal dari penjualan bukan tunai dan/atau saldo awal piutang usaha.',
            // ],

        ];
        $title = 'Penjualan';
        return view('navbar.data_master', compact(['data', 'title']));
    }
    public function asset()
    {
        $data = [
            []

        ];
        $title = 'Asset';
        return view('navbar.data_master', compact(['data', 'title']));
    }

    public function testing(Request $r)
    {
        return view('testing');
    }
}
