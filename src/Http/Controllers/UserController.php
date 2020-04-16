<?php
namespace Dataview\SorroUser;

use Dataview\Sorro\SorroController;
use Illuminate\Http\Response;

use Dataview\Sorro\User;
use App\Http\Requests;
// use Dataview\SorroUser\UserRequest;

class UserController extends SorroController{

	public function __construct(){
	}

  public function index(){
		return view('User::index');
	}
	
}
