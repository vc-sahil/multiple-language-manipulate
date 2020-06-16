<?php

use Carbon\Carbon;
use Database\TruncateTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class IndustrySectorSeeder.
 */
class IndustrySectorSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncate(config('table-variables.industry_sector_table'));
        $industrySector = [
            [
                'name'                          => 'Commercial',
                'en_industry_sector_name'       => 'Commercial',
                'it_industry_sector_name'       => 'Commerciale',
                'gr_industry_sector_name'       => 'kommerziell',
                'created_at'                    => Carbon::now(),
                'updated_at'                    => Carbon::now(),
            ],
            [
                'name'                          => 'Education',
                'en_industry_sector_name'       => 'Education',
                'it_industry_sector_name'       => 'Educativo',
                'gr_industry_sector_name'       => 'Pädagogisch',
                'created_at'                    => Carbon::now(),
                'updated_at'                    => Carbon::now(),
            ],
            [
                'name'                          => 'Health',
                'en_industry_sector_name'       => 'Health',
                'it_industry_sector_name'       => 'Salute',
                'gr_industry_sector_name'       => 'Gesundheit',
                'created_at'                    => Carbon::now(),
                'updated_at'                    => Carbon::now(),
            ],
            [
                'name'                          => 'Banking',
                'en_industry_sector_name'       => 'Banking',
                'it_industry_sector_name'       => 'Bancario',
                'gr_industry_sector_name'       => 'Banking',
                'created_at'                    => Carbon::now(),
                'updated_at'                    => Carbon::now(),
            ],
        ];

        DB::table(config('table-variables.industry_sector_table'))->insert($industrySector);
    }
}
