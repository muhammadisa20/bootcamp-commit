<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$data['name'] = "Muhammad Isa";
$data['address'] = "Jl. Juaro IX, Palembang";
$data['hobbies'] = array("Mancing Emosi", "Mancing Keributan", "Mancing Mania");
$data['is_maried'] = false;
class sekolah {
    function sekolah() {
        $this->highSchool = "SMK Nusantara 1";
        $this->University = "Belom Kuliah";
    }
}

// create an object
$data['school'] = new sekolah();

$data['skills'] = new ArrayObject();                                  
$data['skills']['1'] = 'Ngabisin Duit';
$data['skills']['2'] = 'Ngopi'; 
echo json_encode($data);

?>
</body>
</html>