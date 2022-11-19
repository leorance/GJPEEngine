<?php

namespace Database\Factories;
use App\Models\Classes;
use App\Models\Pelayanan;
use App\Models\Talents;
use App\Models\Uname;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private static $ip = 1;
    public function definition()
    {
        return [
            'id_pel' => 'PEL'.self::$ip++,
            'id_nama' => Uname::all()->random()->id_nama,
            'id_kelas' => Classes::all()->random()->id_kelas,
            'id_talent' => Talents::all()->random()->id_talent,
            'tanggal_pelayanan' => date(Carbon::now()->isoWeekday(7)->format('Y-m-d')),
        ];
    }
}