<?php

$data_siswa=[];

while(true)
{
    // data siswa

    $siswa=&$data_siswa;

    // banner aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("=====================");

    // User memilih input


    $input_siswa=readline("Masukan data siswa !!  ");
   
    if(!preg_match("/^[A-z ]*$/",$input_siswa || empty($input_siswa)))
    {
        echo "maaf validasi yang anda masukan salah\n";
        continue;
    }
    // Munculkan Data Siswa Magang

    $siswa[]=$input_siswa;

    // 

    $nomor=1;

    foreach($siswa as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }

    tanyauser();
}
function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}
function tanyauser()
{
    $tanya=readline("Tambah Data (yes/no)  ");

    if($tanya=="no" || $tanya!=="yes")
    {
        tampil("terima kasih");
        exit;
    }
}

 