<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class System_Controller extends Controller
{
    public function Main_page()
    {
        return view('Main_page');
    }

    public function Encrypt()
    {
        $encryption = $request->input('textInput');
    }
}
