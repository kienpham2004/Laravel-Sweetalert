<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

        return view('welcome', compact('users'));
    }

    public function destroy($id)
    {
        $isDeleted = User::where('id', $id)->delete();
        alert()->success('success', 'deleted success!');

        return redirect()->back();
    }
}
