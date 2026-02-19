<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the user registration form.
     */
    public function register(): View
    {
        $roles = [
            ['id' => 1, 'name' => 'dosen', 'label' => 'Dosen'],
            ['id' => 2, 'name' => 'rektor_1', 'label' => 'Rektor 1'],
            ['id' => 3, 'name' => 'rektor_2', 'label' => 'Rektor 2'],
            ['id' => 4, 'name' => 'wakil_rektor_1', 'label' => 'Wakil Rektor 1'],
            ['id' => 5, 'name' => 'wakil_rektor_2', 'label' => 'Wakil Rektor 2'],
            ['id' => 6, 'name' => 'kepala_lppm', 'label' => 'Kepala LPPM'],
        ];
        return view('auth.register', compact('roles'));
    }

    /**
     * Store a newly registered user in the database.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role_id' => $request->role_id,
                'nidn' => $request->nidn,
                'phone' => $request->phone,
                'address' => $request->address,
                'unit' => $request->unit,
                'status' => $request->status ?? 'active',
            ]);

            return redirect()->route('users.index')
                ->with('success', 'User berhasil didaftarkan! Email: ' . $user->email);
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Gagal mendaftarkan user: ' . $e->getMessage());
        }
    }
}
