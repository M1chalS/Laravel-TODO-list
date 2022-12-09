<?php

namespace App\Http\Controllers;

use App\Models\TODOList;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TODOListController extends Controller
{
    public function index() : View {
        return View("index", [
            'lists' => TODOList::latest()->get(),
        ]);
    }

    public function store(Request $request) : RedirectResponse {

        $formFields = $request->validate([
           'content' => 'required',
        ]);

        TODOList::create($formFields);

        return redirect()->back()->with("message", "Successfully added");
    }

    public function delete(TODOList $list) : RedirectResponse {

        $list->delete();

        return redirect()->back()->with("message", "Successfully deleted");
    }

}
