<?php
namespace Dataview\SorroUser\Console;
use Dataview\Sorro\Console\SorroServiceInstallCmd;
use Dataview\SorroUser\UserServiceProvider;
use Dataview\SorroUser\UserSeeder;

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
