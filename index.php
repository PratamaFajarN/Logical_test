<!DOCTYPE html>
<html>

<body>
    <!-- NO.1 -->
    <?php
	$aplikasi[1] = "gtAkademik";
    $aplikasi[2] = "gtFinansi";
    $aplikasi[3] = "gtPerizinan";
    $aplikasi[4] = "eCampus";
    $aplikasi[5] = "eOviz";
    
    $i = 1; 

    while (isset($aplikasi[$i])) {
        echo $aplikasi[$i] . "<br>"; 
        $i++;
    } 
    
?>

<!-- NO.2 -->
<!-- query -->
<?php echo"
SELECT
  tb_mahasiswa.mhs_nama,
  MAX(tb_mahasiswa_nilai.nilai) as nilai
FROM
  tb_mahasiswa_nilai
JOIN
  tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
JOIN
  tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
WHERE
  tb_matakuliah.mk_kode = 'MK303'
GROUP BY
  tb_mahasiswa.mhs_nama
ORDER BY
  nilai DESC
LIMIT 1"
?>


<!-- NO.3 -->

<?php
$a = 7;
$b =3;
$c = 0;
 while ($a >= $b) {
     $a -= $b;
    $c++;
    
    
  }
  
   echo $c;
?>


<!-- no4 -->
<?php
for ($i = 1; $i <= 50; $i++) {
  if ($i % 3 === 0 && $i % 5 === 0) {
    echo "FooBar ";
  } elseif ($i % 3 === 0) {
    echo "Foo ";
  } elseif ($i % 5 === 0) {
    echo "Bar ";
  } else {
    echo $i . " ";
  }
}

?>

</body>

</html>
