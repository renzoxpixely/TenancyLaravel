<?php

namespace App\Http\Controllers\Tenant;
use App\Models\Tenant\Branch;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $branches = Branch::orderBy('id','desc')->paginate(5);
        return view('tenant.branches.index', compact('branches'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('tenant.branches.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        Branch::create($request->post());

        return redirect()->route('tenant.branches.index')->with('success','Branch has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\branch  $branch
    * @return \Illuminate\Http\Response
    */
    public function show(Branch $branch)
    {
        return view('tenant.branches.show',compact('branch'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Branch  $branch
    * @return \Illuminate\Http\Response
    */
    public function edit(Branch $branch)
    {
        return view('tenant.branches.edit',compact('branch'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\branch  $branch
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Branch $branch)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);
        
        $branch->fill($request->post())->save();

        return redirect()->route('tenant.branches.index')->with('success','Branch Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Branch  $branch
    * @return \Illuminate\Http\Response
    */
    public function destroy(Branch $branch)
    {
        $branch->delete();
        return redirect()->route('tenant.branches.index')->with('success','Branch has been deleted successfully');
    }
}
