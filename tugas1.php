<?php

class HewanPurba {

    public  $nama, $tinggi, $berat, $jenismakan, $masahidup, $tahunpunah;

    public function __construct( $nama = "nama", $tinggi = "tinggi", $berat = "berat", $jenismakan = "jenismakan", $masahidup = "masahidup", $tahunpunah = "tahunpunah") {

        $this->nama = $nama;
        $this->tinggi = $tinggi;
        $this->berat = $berat;
        $this->jenismakan = $jenismakan;
        $this->masahidup = $masahidup;
        $this->tahunpunah = $tahunpunah;


    }

    public function getlabel() {

        return "$this->tinggi, $this->berat";

    }

    public function getJenisHewanPurba() {

        $str = "{$this->nama} │ {$this->getlabel()} ({$this->tahunpunah})";

        return $str;
    }

}

class Buku {

    public  $jenis, $judul, $penerbit, $penulis, $tahunterbit , $harga;

    public function __construct( $jenis = "jenis", $judul = "judul", $penerbit = "penerbit", $penulis = "penulis", $tahunterbit = "tahunterbit", $harga = 0) {

        $this->jenis = $jenis;
        $this->judul = $judul;
        $this->penerbit = $penerbit;
        $this->penulis = $penulis;
        $this->tahunterbit = $tahunterbit;
        $this->harga = $harga;


    }

    public function getlabel() {

        return "$this->judul, $this->penerbit, $this->penulis, $this->tahunterbit";

    }

    public function getInfoBuku() {

        $str = "{$this->judul} , {$this->getlabel()} , Rp. {$this->harga} ";

        return $str;
    }

}

class HewanPurbaDarat extends HewanPurba {

    public function getJenisHewanPurba() {
        $str = "HewanPurbaDarat    = {$this->nama} , {$this->getlabel()} , {$this->jenismakan} , {$this->masahidup} , {$this->tahunpunah} ";
        return $str; 
    }

}

class HewanPurbaAir extends HewanPurba {

    public function getJenisHewanPurba() {
        $str = "HewanPurbaAir = {$this->nama} , {$this->getlabel()} , {$this->jenismakan} , {$this->masahidup} , {$this->tahunpunah} ";
        return $str; 
    }

}

class BukuPelajaran extends Buku {

    public function getInfoBuku() {
        $str = "BukuPelajaran = {$this->jenis} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class BukuCerita extends Buku {

    public function getInfoBuku() {
        $str = "BukuCerita = {$this->jenis} , {$this->getlabel()} , Rp. {$this->harga} ";
        return $str; 
    }

}

class CetakJenisHewanPurba {

    public function cetak(HewanPurba $HewanPurba){
        $str = "{$HewanPurba->nama} {$HewanPurba->getlabel()} , {$HewanPurba->tahunpunah} ";
        return $str;
    }

}

class CetakInfoBuku {

    public function cetak(Buku $Buku){
        $str = "{$Buku->judul} {$Buku->getlabel()} (Rp. {$komputer->harga})";
        return $str;
    }

}

$HewanPurba1 = new HewanPurbaDarat("Mammoth", "7.4 m", "1 Ton", "Herbivora", "Ice Age", "5 juta tahun yang lalu");
$HewanPurba2 = new HewanPurbaDarat("Andrewsarchus", "1.8 m", "200 Kg", "Carnivora", "Miosen", "7 juta tahun yang lalu");
$HewanPurba3 = new HewanPurbaAir("Megalodon", "15 m", "750 Kg", "Carnivora", "Miosen-Pliosen", "2.6 juta tahun yang lalu");
$HewanPurba4 = new HewanPurbaAir("Dunkleosteus", "10 m", "450 Kg", "Carnivora", "Devonian", "400 juta tahun yang lalu");

$Buku1 = new BukuPelajaran("Sejarah", "Chronoscop", "Meulenhoff Educatief", "A.C. Voogt", "1998", 575000);
$Buku2 = new BukuPelajaran("Komputer", "Pengantar Aplikasi Komputer", "Gramedia", "Yenny Iskandar", "2012", 159000);
$Buku3 = new BukuCerita("Dongeng", "Which Witch", "Original Book Educate", "Eva Ibbotson", "2009", 17000);
$Buku4 = new BukuCerita("Cerita Rakyat", "Bawang Putih Bawang Merah", "Sandro Jaya", "Jihan Parvati", "1979", 50000);

echo $HewanPurba1->getJenisHewanPurba();
echo "<br>";
echo $HewanPurba2->getJenisHewanPurba();
echo "<br>";
echo $HewanPurba3->getJenisHewanPurba();
echo "<br>";
echo $HewanPurba4->getJenisHewanPurba();
echo "<hr>";
echo $Buku1->getInfoBuku();
echo "<br>";
echo $Buku2->getInfoBuku();
echo "<br>";
echo $Buku3->getInfoBuku();
echo "<br>";
echo $Buku4->getInfoBuku();
echo "<hr>";


?>
