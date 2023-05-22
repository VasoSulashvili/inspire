<?php
namespace VasoSulashvili\Inspire\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use VasoSulashvili\Inspire\Inspire;

class InspireController extends Controller
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('inspire::index')
            ->with('quote', $quote);
    }
}