<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\Controller;

class BarangController extends Controller
{
    protected $barangModel;

    public function __construct()
    {
        $this->barangModel = new BarangModel();
    }

    public function index()
    {
        $data['barang'] = $this->barangModel->findAll();
        echo view('LandingPage/view_index', $data);
    }

    public function show($id = null)
    {
        $data['barang'] = $this->barangModel->find($id);
        if ($data['barang']) {
            echo view('LandingPage/view_index', $data);
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Barang with kode_barang ' . $id . ' not found');
        }
    }
}
