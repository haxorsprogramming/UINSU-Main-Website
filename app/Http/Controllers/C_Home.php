<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Fakultas;
use App\Http\Controllers\G_Setting;

class C_Home extends Controller
{

    protected $G_Setting;

    public function __construct(G_Setting $G_Setting)
    {
        $this -> G_Setting = $G_Setting;
    }

    public function home_page()
    {
        $data = [
            'judul' => 'Homepage',
            'side' => 'home',
            'fakultas' => $this -> get_fakultas(),
            'penmaru' => $this -> G_Setting -> get_setting('LINK_PENMARU')
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

}
