<?php

namespace App\Controllers;

use App\Models\mProducts;
use CodeIgniter\Controller;

class Shop extends BaseController
{
    protected $products;
    protected $session;

    public function __construct()
    {
        $this->products =  new mProducts();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data["products"][0]["url"] = "prod_aqm_portable";
        $data["products"][0]["name"] = "Trusur - AQM Portable";
        $data["products"][0]["image"] = "uploads/prod_aqm_portable_001.jpg";
        $data["products"][0]["location"] = "Jakarta";
        $data["products"][0]["dayrate"] = "500.000,-";
        $data["products"][0]["weekrate"] = "2.800.000,-";
        $data["products"][0]["monthrate"] = "11.000.000,-";

        $data["products"][1]["url"] = "prod_calibrator_001";
        $data["products"][1]["name"] = "Fluke - 5322A Electrical Safety Tester Calibrator";
        $data["products"][1]["image"] = "uploads/prod_calibrator_001.jpg";
        $data["products"][1]["location"] = "Bandung";
        $data["products"][1]["dayrate"] = "250.000,-";
        $data["products"][1]["weekrate"] = "1.400.000,-";
        $data["products"][1]["monthrate"] = "6.000.000,-";
        $data["products"][1]["monthrate"] = "11.000.000,-";

        $data["products"][2]["url"] = "prod_weather_airmar_001";
        $data["products"][2]["name"] = "Airmar - 150WX WeatherStation";
        $data["products"][2]["image"] = "uploads/prod_weather_airmar_001.jpg";
        $data["products"][2]["location"] = "Surabaya";
        $data["products"][2]["dayrate"] = "250.000,-";
        $data["products"][2]["weekrate"] = "1.400.000,-";
        $data["products"][2]["monthrate"] = "6.000.000,-";
        $data["products"][2]["monthrate"] = "11.000.000,-";

        $data["products"][3]["url"] = "prod_weather_davis_001";
        $data["products"][3]["name"] = "Davis - Vantage Pro2 6125";
        $data["products"][3]["image"] = "uploads/prod_weather_davis_001.jpg";
        $data["products"][3]["location"] = "Jakarta";
        $data["products"][3]["dayrate"] = "250.000,-";
        $data["products"][3]["weekrate"] = "1.400.000,-";
        $data["products"][3]["monthrate"] = "6.000.000,-";
        $data["products"][3]["monthrate"] = "11.000.000,-";

        $data["products"][4]["url"] = "cat_gas_chromatography";
        $data["products"][4]["name"] = "Gas Chromatography";
        $data["products"][4]["image"] = "images/cat_gas_chromatography.jpg";
        $data["products"][4]["location"] = "Bandung";
        $data["products"][4]["dayrate"] = "250.000,-";
        $data["products"][4]["weekrate"] = "1.400.000,-";
        $data["products"][4]["monthrate"] = "6.000.000,-";
        $data["products"][4]["monthrate"] = "11.000.000,-";

        $data["products"][5]["url"] = "cat_gas_detector";
        $data["products"][5]["name"] = "Gas Detector";
        $data["products"][5]["image"] = "images/cat_gas_detector.jpg";
        $data["products"][5]["location"] = "Bandung";
        $data["products"][5]["dayrate"] = "250.000,-";
        $data["products"][5]["weekrate"] = "1.400.000,-";
        $data["products"][5]["monthrate"] = "6.000.000,-";
        $data["products"][5]["monthrate"] = "11.000.000,-";

        $data["products"][6]["url"] = "cat_o2_generator";
        $data["products"][6]["name"] = "O2 Generator";
        $data["products"][6]["image"] = "images/cat_o2_generator.jpg";
        $data["products"][6]["location"] = "Bandung";
        $data["products"][6]["dayrate"] = "250.000,-";
        $data["products"][6]["weekrate"] = "1.400.000,-";
        $data["products"][6]["monthrate"] = "6.000.000,-";
        $data["products"][6]["monthrate"] = "11.000.000,-";

        $data["products"][7]["url"] = "cat_particle_and_cell_counter";
        $data["products"][7]["name"] = "Particle and Cell Counter";
        $data["products"][7]["image"] = "images/cat_particle_and_cell_counter.jpg";
        $data["products"][7]["location"] = "Bandung";
        $data["products"][7]["dayrate"] = "250.000,-";
        $data["products"][7]["weekrate"] = "1.400.000,-";
        $data["products"][7]["monthrate"] = "6.000.000,-";


        echo view('vHeader2');
        echo view('vShop', $data);
        echo view('vFooter');
    }
}
