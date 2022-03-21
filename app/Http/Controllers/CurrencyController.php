<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;
use AmrShawky\LaravelCurrency\Facade\Currency;

class CurrencyController extends Controller
{
    public function index()
    {
        $codes =   Currency::rates()->latest()->get();
        return View('welcome', [
            'codes' => $codes,
        ]);
    }

    public function convert(Request $request)
    {

        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'amount' => 'required',
        ]);


        $currency =   Currency::convert()->from($request->from)->to($request->to)->amount($request->amount)->get();

        return redirect()->back()->with([
            'amount' => $currency,
            'from' => $request->from,
            'to' => $request->to,
            'currentAmount' => $request->amount,
        ]);
    }
}
