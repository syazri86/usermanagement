<?php

namespace Teknomuslim\CurrencyFormatter\Controllers;

use App\Http\Controllers\Controller;

class CurrencyFormatterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function greeting()
    {
        return view('CurrencyFormatter::greeting');
    }
}
