<?php
    include 'connection.php';

    if($_GET['task'] == 'input'){
        if(isset($_POST['submit'])){
            $dataDiri = $_POST['data-diri'];
            $indeksUmur = 0;

            
            $arrayWords = explode(" ","$dataDiri");
            foreach ($arrayWords as $index => $word){
                if(is_numeric($word)){
                    $indeksUmur = $index;
                }
            }
            

            $nama = '';
            for ($i=0; $i < $indeksUmur; $i++) { 
                $nama .= $arrayWords[$i]. ' ';
            }
            $umur = $arrayWords[$indeksUmur];

            
            $kota = '';
            if (strtolower($arrayWords[$indeksUmur+1]) != "thn" && strtolower($arrayWords[$indeksUmur+1]) != "tahun" && strtolower($arrayWords[$indeksUmur+1]) != "th") {
                for ($i=$indeksUmur + 1; $i < count($arrayWords); $i++) { 
                    $kota .= $arrayWords[$i]. ' ';
                }   
            }
            else {
                for ($i=$indeksUmur + 2; $i < count($arrayWords); $i++) { 
                    $kota .= $arrayWords[$i]. ' ';
                } 
            }


            $namaKapital = strtoupper($nama);
            $kotaKapital = strtoupper($kota);
            $sql = mysqli_query($koneksi, "INSERT INTO pengguna (name, age, city, created_at) VALUES ('$namaKapital', $umur, '$kotaKapital',NOW())");


            if ($sql) {
                echo "yeay berhasil!";
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
            
        }
    }