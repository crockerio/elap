<?php

namespace Crockerio\ELAP;

use App\Http\Controllers\Controller;

class ELAPController extends Controller
{
    public function info()
    {
        return view('elap::info');
    }
}
