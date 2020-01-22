<?php 
class ideal{

	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo "Nilai BMI : ".$bmi." || "."Kategori :"." Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo "Nilai BMI : ".$bmi." || "."Kategori :"." Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "Nilai BMI : ".$bmi." || "."Kategori :"." Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "Nilai BMI : ".$bmi." || "."Kategori :"." Obesitas";
			}
		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo "Nilai BMI : ".$bmi." || "."Kategori : "." Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo "Nilai BMI : ".$bmi."|| "."Kategori : "." Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo "Nilai BMI : ".$bmi." || "."Kategori : "." Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo "Nilai BMI : ".$bmi." || "."Kategori : ". "Obesitas";
			}
		}
	}

}
$hitung = new ideal(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['bb'];
	$tb = $_POST['tb'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$hitung->hitung($bmi, $jk);
}
 ?>