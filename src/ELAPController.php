<?php

namespace Crockerio\ELAP;

use Illuminate\Routing\Controller;

class ELAPController extends Controller
{
    public function info()
    {
        return view('elap::info');
    }
}
