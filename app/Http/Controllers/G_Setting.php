<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_Setting_Kampus;

class G_Setting extends Controller
{
    public function get_setting($kd_setting)
    {
        return M_Setting_Kampus::where('kd_setting', $kd_setting) -> first();
    }
}
