<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view("dashboard.history.history", [
            "history" => History::all()
        ]);
    }
}
