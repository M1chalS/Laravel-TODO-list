<?php

namespace App\Http\Controllers;

use App\Models\TODOList;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TODOListController extends Controller
{
    public function index() : View {
        return View("index", [
            'lists' => TODOList::latest()->get(),
        ]);
    }
}
