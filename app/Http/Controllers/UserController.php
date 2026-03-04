<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        // Tambah data user dengan Eloquent Model
        $data = [
            'username' => 'customer-1',
            'nama' => 'Pelanggan 1',
            'password' => Hash::make('12345'),
            'level_id' => 4,
        ];

        UserModel::insert($data); // Tambah data ke tabel m_user

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
