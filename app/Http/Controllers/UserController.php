<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());


        return redirect()->route('dataUser')->with('success', 'Anggota berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|unique:users,email,' . $id,
            'alamat'  => 'required|string|max:255',
            'no_telp' => 'required|string|max:15',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name'    => $request->name,
            'email'   => $request->email,
            'alamat'  => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('dataUser')->with('success', 'Anggota berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('dataUser')->with('success', 'Anggota berhasil dihapus.');
    }
}