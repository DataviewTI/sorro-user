<?php
namespace Dataview\User\Console;
use Dataview\Sorro\Console\SorroServiceInstallCmd;
use Dataview\User\UserServiceProvider;
use Dataview\User\UserSeeder;

class Install extends SorroServiceInstallCmd
{
  public function __construct(){
    parent::__construct([
      "service"=>"user",
      "provider"=> UserServiceProvider::class,
      "seeder"=>UserSeeder::class,
    ]);
  }

  public function handle(){
    parent::handle();
  }
}
