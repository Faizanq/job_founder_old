<?php

use App\Models\Category;
use App\Models\Language;
use App\Models\Position;
use App\Models\Reason;
use App\Models\Report;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Language::truncate();
        Reason::truncate();
        Report::truncate();
        Category::truncate();
        Position::truncate();

        $languageQuantity = 10;
        $reasonQuantity = 10;
        $reportQuantity = 10;
        $categoryQuantity = 10;
        $positionQuantity = 10;

        factory(Language::class,$languageQuantity)->create();
        factory(Reason::class,$reasonQuantity)->create();
        
        factory(Report::class,$reportQuantity)->create();
        
        factory(Category::class,$categoryQuantity)->create();
        
        factory(Position::class,$positionQuantity)->create();

    }
}
