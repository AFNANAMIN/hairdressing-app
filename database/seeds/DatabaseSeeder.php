<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->rrmdir(public_path() . "/system");

        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(HoursTableSeeder::class);
        $this->call(StylistsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);

        Model::reguard();
    }

    public function rrmdir($dir) {
       if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir."/".$object) == "dir") {
                        $this->rrmdir($dir."/".$object);
                    } else {
                        unlink($dir."/".$object);
                    }
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }
}
