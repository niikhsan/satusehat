<?php
namespace Niikhsan\Satusehat\Controllers;

use Illuminate\Http\Request;
use Niikhsan\Satusehat\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}