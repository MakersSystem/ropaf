<?php


namespace App\Http\Controllers\Admin;

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;
class globalreportController extends Controller
{
    public function index(){
      if (! Gate::allows('users_manage')) {
          return abort(401);
      }

      return view('admin.report.reportes');
    }
}
