<?php
namespace Dataview\SorroUser\Console;

use Dataview\Sorro\Console\SorroUserRemoveCmd;
// use Dataview\IntranetOne\Sorro;
use Dataview\SorroUser\SorroUserServiceProvider;


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
