<?php 
 
class Coba{
	const NAMA = "Marlina Puspita Dewi";
	public $kelas = __CLASS__;

	public function coba(){
		return __FUNCTION__;
	}
}

echo Coba::NAMA;

echo"<hr>";
echo __LINE__;

echo"<hr>";
echo __FILE__;

echo"<hr>";
echo __DIR__;

echo"<hr>";
$obj = new Coba();
echo $obj->coba();
echo"<hr>";
echo $obj->kelas;
echo"<hr>";
echo __TRAIT__;
echo"<hr>";
echo __METHOD__;
echo"<hr>";
echo __NAMESPACE__;