<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            [
                'title'     =>  'Inicio',
                'icon'      =>  'bx bx-home-alt',
                'url'       =>  'dashboard'
            ],
            [
                'name'      =>  'Categorias',
                'url'       =>  'admin.categories.index'
            ],
            [
                'name'      =>  'Lista Categorias',
                'url'       =>  'admin.categories.index',
                'active'    =>  true
            ]
        ];
        
        return view('admin.categories.index')
                ->with('title', 'Administración Categorias')
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
    public function show(Category $category)
    {
        $breadcrumbs = [
            [
                'title'     =>  'Inicio',
                'icon'      =>  'bx bx-home-alt',
                'url'       =>  'dashboard'
            ],
            [
                'name'      =>  'Categorias',
                'url'       =>  'admin.categories.index'
            ],
            [
                'name'      =>  'Lista Categorias',
                'url'       =>  'admin.categories.index',
                'active'    =>  true
            ]
        ];
        
        return view('admin.categories.show')
                ->with('title', 'Mostrar subcategoria')
                ->with('breadcrumbs', $breadcrumbs);
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
}
