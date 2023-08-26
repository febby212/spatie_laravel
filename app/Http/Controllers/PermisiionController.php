<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Permission;
use Spatie\Permission\Models\Permission as ModelsPermission;
use Spatie\Permission\Models\Role;

class PermisiionController extends Controller
{

    function __construct()
    {
        $this->middleware(['permission:permission-list|permission-create|permission-edit|permission-delete'], ['only' => ['index', 'show']]);
        $this->middleware(['permission:permission-create'], ['only' => ['create', 'store']]);
        $this->middleware(['permission:permission-edit'], ['only' => ['edit', 'update']]);
        $this->middleware(['permission:permission-delete'], ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role=Role::all();
        $permission = ModelsPermission::all();
        // dd($permission, $role)->toArray;
        return view('permis.index', compact('permission', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
