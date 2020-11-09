<?php

namespace App\Http\Controllers;

use App\Models\Base;
use Illuminate\Http\Request;

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
