<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){

        $users = User::all();
        // $users = User::paginate(1);

        return view('users.index', compact('users'));
    }

    public function create(){
        return view('users.create');
    }

    public function show($id){
        echo "UserController - Show";
    }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        $user = new User;
        $user->name = $validated["name"];
        $user->email = $validated["email"];
        $user->password = bcrypt($validated["password"]);
        $user->save();

        return redirect()->route('users.index');

    }

    public function edit($id){
        //o id buscar no DB
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;

        $user->update();

        return redirect()->route('users.index');

    }

    public function destroy($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index');
    }
}
