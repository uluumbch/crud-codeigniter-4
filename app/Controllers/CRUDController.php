<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TugasModel;

class CRUDController extends BaseController
{
    public function index()
    {
        $model = new TugasModel();
        $semuaData = $model->findAll();
        return view('index', [
            "data" => $semuaData
        ]);
    }

    public function tambah()
    {
        return view("create");
    }

    public function simpan()
    {
        $model = new TugasModel();
        $nama_tugas = request()->getPost("nama_tugas");
        $deskripsi_tugas = request()->getPost("deskripsi_tugas");

        $model->insert([
            "nama_tugas" => $nama_tugas,
            "deskripsi_tugas" => $deskripsi_tugas
        ]);

        return redirect()->to(base_url('/'));
    }

    public function edit($id)
    {
        $model = new TugasModel();
        $data = $model->find($id);
        return view('edit', [
            "data" => $data
        ]);
    }
    public function update($id)
    {
        $model = new TugasModel();
        $nama_tugas = request()->getPost("nama_tugas");
        $deskripsi_tugas = request()->getPost("deskripsi_tugas");

        $model->update($id, [
            "nama_tugas" => $nama_tugas,
            "deskripsi_tugas" => $deskripsi_tugas
        ]);
        return redirect()->to(base_url('/'));
    }

    public function hapus($id)
    {
        $model = new TugasModel();
        $model->delete($id);
        return redirect()->to(base_url('/'));
    }
}
