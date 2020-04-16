<?php
namespace Dataview\SorroUser\Console;

use Dataview\Sorro\Console\UserRemoveCmd;
// use Dataview\IntranetOne\Sorro;
use Dataview\SorroUser\UserServiceProvider;


class Remove extends SorroServiceRemoveCmd
{
  public function __construct(){
    parent::__construct([
      "service"=>"user",
      "tables" =>[],
      "force" =>[],
    ]);
  }

  public function handle(){
    parent::handle();
  }
}
