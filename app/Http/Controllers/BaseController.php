<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Base;

class BaseController extends Controller
{
    public function index() {
        return view('bases.index');
    }

    public function store() {
        $base = new Base();

        $base->name = request('name');

        $base->save();

        return redirect('/bases');
    }

    public function destroy($id) {
        $base = Base::findOrFail($id);
        $base->delete();

        return redirect('/bases');
    }
}
