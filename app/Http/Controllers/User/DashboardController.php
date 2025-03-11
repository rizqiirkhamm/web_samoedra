<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\RoleModel;
use Illuminate\Http\Request;
use App\Models\PermissionRoleModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

  // Ambil permission lain jika perlu
  $data['PermissionAdd']    = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Add User');
  $data['PermissionEdit']   = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Edit User');
  $data['PermissionDelete'] = PermissionRoleModel::getPermission(Auth::user()->role_id, 'Delete User');

  // Ambil data user
  $data['getRecord'] = User::getRecord();
  // di Model User sudah ada static function getRecord() yang join ke roles

  return view('users.dashboard', $data);
    }
}
