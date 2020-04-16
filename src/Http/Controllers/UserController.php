<?php
namespace Dataview\User;

use Dataview\Sorro\SorroController;
use Illuminate\Http\Response;

use Dataview\Sorro\User;
use App\Http\Requests;
use Dataview\User\UserRequest;

class UserController extends SorroController{

	public function __construct(){
	}

  public function index(){
		return view('User::index');
	}
	
}
