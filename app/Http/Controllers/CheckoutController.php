<?php

use Illuminate\Http\Request;

function index()
{
    return view('checkout.index');
}

function process(Request $request)
{
    // Process payment using Laravel Cashier
}