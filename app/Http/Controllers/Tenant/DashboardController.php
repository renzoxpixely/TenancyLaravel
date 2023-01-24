<?php
namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;

use App\Models\Tenant\Branch;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index($branch_id)
    {
        $branches = Branch::where('id', $branch_id)->get();
        return view('tenant.dashboard.index', compact('branch_id','branches'));
    }
}
