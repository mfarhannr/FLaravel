<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use illuminate\Support\Facades\Config;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $mapel_x1 = config::get("soal.MataPelajaran.matapelajaran_x.mapel_x1");
        $mapel_x2 = config("soal.MataPelajaran.matapelajaran_x.mapel_x2");
        $mapel_x3 = config("soal.MataPelajaran.matapelajaran_x.mapel_x3");

        $mapel_xi1 = config("soal.MataPelajaran.matapelajaran_xi.mapel_xi1");
        $mapel_xi2 = config("soal.MataPelajaran.matapelajaran_xi.mapel_xi2");
        $mapel_xi3 = config("soal.MataPelajaran.matapelajaran_xi.mapel_xi3");

        self::assertEquals($mapel_x1, "Desain");
        self::assertEquals($mapel_x2, "Informatika");
        self::assertEquals($mapel_x3, "Progdas");

        self::assertEquals($mapel_xi1, "PKK");
        self::assertEquals($mapel_xi2, "Webdev");
        self::assertEquals($mapel_xi3, "Matematika");
    }
}
