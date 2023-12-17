<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.users', [
            'users' => User::all(),
        ]);
    }

    public function store(Request $request)
    {
        // $validatedData =  $request->validate([
        //     'name' => ['required', 'string'],
        //     'username' => ['required', 'string'],
        //     'password' => ['required', 'string', 'min:6'],
        //     'phone' => ['required', 'string'],
        //     'address' => ['required', 'string'],
        //     'role' => ['required', 'string'],
        // ]);

        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function update(Request $request, User $user)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'string'],
            'username' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
            'role' => ['required', 'string'],
        ]);

        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        } else {
            $validatedData['password'] = $request->oldPassword;
        }

        User::where('id', $user->id)->update($validatedData);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil dihapus!');
    }
}
