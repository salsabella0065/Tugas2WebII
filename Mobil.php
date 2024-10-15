<?php
class Mobil {
    // Properti
    public $nama;
    public $merk;

    // Method untuk mencetak informasi mobil
    function Cetak_Info() {
        echo "Nama Mobil: $this->nama, Merk: $this->merk";
    }
}

class MobilSports extends Mobil {
    public $speed;

    // Method untuk mencetak informasi speed
    function Turbo() {
        echo "Speed: $this->speed";
    }
}

class CityCar extends Mobil {
    public $model;

    // Method untuk mencetak informasi model
    function Irit () {
        echo "Model: $this->model";
    }
    
}
// car
$data_mobil = new Mobil();
$data_mobil->nama = "HR-V SE CVT";
$data_mobil->merk = "Honda";
$data_mobil->Cetak_Info();

echo "<br />";
// sport car
$mobil_sports = new MobilSports();
$mobil_sports->nama = "Mazda RX-7";
$mobil_sports->merk = "Mazda";
$mobil_sports->speed = "254 km/h";
$mobil_sports->Cetak_Info();
echo "<br />";
$mobil_sports->Turbo();

echo "<br />";
//city car
$city_car = new CityCar();
$city_car->nama = "BMW 318i e36";
$city_car->merk = "BMW";
$city_car->model = "Sedan";
$city_car->Cetak_Info();
echo "<br />";
$city_car->Irit();
?>