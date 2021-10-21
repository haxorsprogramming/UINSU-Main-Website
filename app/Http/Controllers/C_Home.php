<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Fakultas;
use App\Models\M_Setting_Kampus;

class C_Home extends Controller
{
    public function home_page()
    {
        $data = [
            'judul' => 'Homepage',
            'side' => 'home',
            'fakultas' => $this -> get_fakultas(),
            'penmaru' => $this -> get_setting('LINK_PENMARU')
        ];
        return view('home.home_page', $data);
    }
    public function academic_page()
    {
        $data = ['judul' => 'Academic', 'side' => 'academic', 'fakultas' => $this -> get_fakultas()];
        return view('home.academic_page', $data);
    }
    public function get_fakultas()
    {
        return M_Fakultas::all();
    }
    public function get_setting($kd_setting)
    {
        return M_Setting_Kampus::where('kd_setting', $kd_setting) -> first();
    }

}
