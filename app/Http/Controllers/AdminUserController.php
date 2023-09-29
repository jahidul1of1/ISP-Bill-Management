<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('admin.users.index', [
        //     'users' => User::paginate(50)
        // ]);

        return view('admin.users.index', [
            'users' => User::latest()->filter(
                        request(['search', 'name', 'phone'])
                    )->paginate(18)->withQueryString()
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        User::create(array_merge($this->validateUser(), [
            'user_id' => request()->user()->id,
            'email' => request()->user()->email
        ]));

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        $attributes = $this->validateUser($user);

        // if ($attributes['name'] ?? false) {
        //     $attributes['name'] = request()->user()->name;
        // }

        $user->update($attributes);

        return back()->with('success', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success', 'User Deleted!');
    }


    protected function validateUser(?User $user = null): array
    {
        $user ??= new User();

        return request()->validate([

            'username' => 'required|min:3',
            'name' => 'required|max:255',
            'phone' => 'required|max:11',
            'nid' => 'nullable|max:40',
            'mbps' => 'required|max:11',
            'bill' => 'required|max:11',
            'location' => 'required|max:255',
            'email' => 'required|email|max:255'
            // 'password' => 'required|min:4',

        ]);
    }


}
