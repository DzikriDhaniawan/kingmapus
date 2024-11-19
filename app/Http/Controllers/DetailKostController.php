<?php

namespace App\Http\Controllers;

use App\Models\DetailKost;
use Illuminate\Http\Request;

class DetailKostController extends Controller
{
    public function show($id)
    {
        $detailKost = DetailKost::find($id);
        return view('detail', compact('detailKost'));
    }
}
