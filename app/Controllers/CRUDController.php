<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TugasModel;

class CRUDController extends BaseController
{
    protected $helpers = ['form'];
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
        $rules = [
            "nama_tugas" => [
                "label" => "Nama Tugas",
                "rules" => "required|min_length[3]",
                "errors" => [
                    "required" => "Kolom nama tugas harus diisi",
                    "min_length" => "panjang harus lebih dari 3"
                ]
            ],
            "deskripsi_tugas" => [
                "label" => "deskripsi tugas",
                "rules" => "required",
                "errors" => [
                    "required" => "Kolom deskripsi tugas harus diisi"
                ]
            ]
        ];

        if(!$this->validate($rules)){
            return redirect()->to(base_url('/tambahdata'))->withInput();
        }

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
        $rules = [
            "nama_tugas" => [
                "label" => "Nama Tugas",
                "rules" => "required|min_length[3]",
                "errors" => [
                    "required" => "Kolom nama tugas harus diisi",
                    "min_length" => "panjang harus lebih dari 3"
                ]
            ],
            "deskripsi_tugas" => [
                "label" => "deskripsi tugas",
                "rules" => "required",
                "errors" => [
                    "required" => "Kolom deskripsi tugas harus diisi"
                ]
            ]
        ];

        if(!$this->validate($rules)){
            return redirect()->back()->withInput();
        }
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
