<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
        public function index(){
            $user = User::orderBy('created_at', 'DESC')->get();
             return view('admins.index', compact('user'));
        }
    
}