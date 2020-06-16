<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IndustrySector extends Model
{
    /**
     * @return mixed
     */
    public static function getAll()
    {
        return self::query()->get();
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function getTableName()
    {
        return config('table-variables.industry_sector_table');
    }

    /**
     * @param string $lang
     *
     * @return mixed
     */
    public static function getAllByPluck(string $lang = 'en')
    {
        return pluckDBTrans(self::query(), dbTrans($lang, self::getTableName()));
    }
}
