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
        $data = $request->all();

        $data['password'] = bcrypt($request->password);

        User::create($data);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function update(Request $request, User $user)
    {
        $data = [
            'name' => $request->name,
            'username' => $request->username,
            'phone' => $request->phone,
            'information' => $request->information,
            'role' => $request->role
        ];

        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            $data['password'] = $request->oldPassword;
        }

        User::where('id', $user->id)->update($data);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil diubah!');
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect(route('users.index'))
            ->with('success', 'Pengguna berhasil dihapus!');
    }
}
