<?php

namespace App\Http\Controllers;

use App\Models\PenjualanDetailModel;
use App\Models\BarangModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DetailController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar Detail',
            'list' => ['Home', 'Detail']
        ];

        $page = (object)[
            'title' => 'Daftar detail yang terdaftar dalam sistem'
        ];

        $activeMenu = 'detail';

        $detail = PenjualanDetailModel::all();

        return view('detail.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'detail' => $detail, 'activeMenu' => $activeMenu]);
    }

    public function list(Request $request)
    {
        $details = PenjualanDetailModel::select('detail_id', 'penjualan_id', 'barang_id', 'harga', 'jumlah',);
        if ($request->jumlah) {
            $details->where('jumlah', $request->jumlah);
        }

        return DataTables::of($details)
            ->addIndexColumn()
            ->addColumn('action', function ($detail) {
                $btn  = '<a href="' . url('/detail/' . $detail->detail_id) . '" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="' . url('/detail/' . $detail->detail_id . '/edit') . '" class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="' . url('/detail/' . $detail->detail_id) . '">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah Detail',
            'list' => ['Home', 'Detail', 'Tambah']
        ];

        $page = (object)[
            'title' => 'Tambah detail baru'
        ];

        $detail = PenjualanDetailModel::all();
        $activeMenu = 'detail';

        return view('detail.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'detail' => $detail, 'activeMenu' => $activeMenu]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'penjualan_id' => 'required',
            'barang_id' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        PenjualanDetailModel::create([
            'penjualan_id' => $request->penjualan_id,
            'barang_id' => $request->barang_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);

        return redirect('/detail')->with('success', 'Data detail berhasil ditambahkan');
    }

    public function show($id)
    {
        $detail = PenjualanDetailModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Detail Detail',
            'list' => ['Home', 'Detail', 'Detail']
        ];

        $page = (object)[
            'title' => 'Detail detail'
        ];

        $activeMenu = 'detail';

        return view('detail.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'detail' => $detail, 'activeMenu' => $activeMenu]);
    }

    public function edit($id)
    {
        $detail = PenjualanDetailModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Edit Detail',
            'list' => ['Home', 'Detail', 'Edit']
        ];

        $page = (object)[
            'title' => 'Edit detail'
        ];

        $activeMenu = 'detail';

        return view('detail.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'detail' => $detail, 'activeMenu' => $activeMenu]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'penjualan_id' => 'required',
            'barang_id' => 'required',
            'harga' => 'required',
            'jumlah' => 'required'
        ]);

        PenjualanDetailModel::find($id)->update([
            'penjualan_id' => $request->penjualan_id,
            'barang_id' => $request->barang_id,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah
        ]);
        return redirect('/detail')->with('success', 'Data detail berhasil diubah');
    }

    public function destroy($id)
    {
        $check = PenjualanDetailModel::find($id);

        if (!$check) {
            return redirect('/detail')->with('error', 'Data detail tidak ditemukan');
        }

        try {
            PenjualanDetailModel::destroy($id);

            return redirect('/detail')->with('success', 'Data detail berhasil dihapus');
        } catch (\Exception $e) {
            return redirect('/detail')->with('error', 'Data detail gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }
}