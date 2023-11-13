<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::paginate(10);
        // $users = User::with(['roles'])->get();

        // dd( $users[0]['roles'][0]['name'] );

        // $user = Auth::user()->roles->pluck('name');
        // dd( $user );
        // $user = User::find(Auth::user()->id);
        // dd( $user->getRoleNames() );

        $breadcrumbs = [
            [
                'title'     =>  'Inicio',
                'icon'      =>  'bx bx-home-alt',
                'url'       =>  'dashboard'
            ],
            [
                'name'      =>  'Usuarios',
                'url'       =>  'admin.users.index'
            ],
            [
                'name'      =>  'Lista usuarios',
                'url'       =>  'admin.users.index',
                'active'    =>  true
            ]
        ];
        
        return view('admin.users.index')
                ->with('title', 'Administración usuarios')
                ->with('breadcrumbs', $breadcrumbs);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function restart($id)
    {
        //
    }
}
