<?php
namespace Dataview\IOEntity\Console;
use Dataview\Sorro\Console\SorroUserInstallCmd;
use Dataview\SorroUser\SorroUserServiceProvider;
use Dataview\SorroUser\UserSeeder;

class Install extends IOServiceInstallCmd
{
  public function __construct(){
    parent::__construct([
      "service"=>"user",
      "provider"=> SorroUserServiceProvider::class,
      "seeder"=>UserSeeder::class,
    ]);
  }

  public function handle(){
    parent::handle();
  }
}
