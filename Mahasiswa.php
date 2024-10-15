<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $jurusan;
    public $semester;

    function cetakInfo(){
        echo "Nim: $this->nim";
        echo "<br>";
        echo "Nama: $this->nama";
        echo "<br>"; 
        echo "Jurusan: $this->jurusan";
        echo "<br>";
        echo "Semester: $this->semester";
        echo "<br>";
    }
}
class MahasiswaKKN extends Mahasiswa {
    public $LokasiKKN;
    public $Proker;

    function infoKKN(){
        echo "Lokasi KKN : $this->LokasiKKN";
        echo "<br>";
        echo "Proker : $this->Proker";
        echo "<br>";  
    }
}
class MahasiswaMagang extends Mahasiswa {
    public $PerusahaanMagang;
    public $Jobdesk;

    function infoMagang(){
        echo "Perusahaan Magang : $this->PerusahaanMagang";
        echo "<br>";
        echo "Jobdesk : $this->Jobdesk";
        echo "<br>";  
    }
}

$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nim = "23.230.0065";
$mahasiswa1->nama = "Salsa Bella";
$mahasiswa1->jurusan = "Sistem Informasi";
$mahasiswa1->semester = "3";
$mahasiswa1->CetakInfo();
echo "<br>";  

$mahasiswaKKN = new MahasiswaKKN();
$mahasiswaKKN->nim = "2322219";
$mahasiswaKKN->nama = "Hendra Mahesa";
$mahasiswaKKN->jurusan = "Ilmu Komunikasi";
$mahasiswaKKN->semester = "6";
$mahasiswaKKN->LokasiKKN = "Desa Pajang, Laweyan";
$mahasiswaKKN->Proker = "Mengenalkan Public Speaking pada Anak-Anak ";
$mahasiswaKKN->CetakInfo();
$mahasiswaKKN->InfoKKN();
echo "<br>";

$mahasiswaMagang = new MahasiswaMagang();
$mahasiswaMagang->nim = "19230009";
$mahasiswaMagang->nama = "Khadijah Assa'diyah";
$mahasiswaMagang->jurusan = "Psikologi";
$mahasiswaMagang->semester = "6";
$mahasiswaMagang->PerusahaanMagang = "The Jakarta Consulting Group";
$mahasiswaMagang->Jobdesk = "Bergabung dengan tim bagian Assesment dan Recruitment";
$mahasiswaMagang->CetakInfo();
$mahasiswaMagang->InfoMagang();
echo "<br>";
?>