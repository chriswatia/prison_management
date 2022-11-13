<?php

namespace App\Http\Controllers\Admin;

use App\Models\CellBlock;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $cell_blocks = CellBlock::all();
        return view('admin.dashboard', compact('cell_blocks'));
    }
}
