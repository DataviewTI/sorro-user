<?php

namespace Dataview\SorroUser;
use Dataview\Sorro\SorroRequest;

class UserRequest extends SorroRequest
{
  public function sanitize(){
    $input = parent::sanitize();

    $this->replace($input);
	}

  public function rules(){
    $this->sanitize();
    return [];
  }
}
