<?php
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$emp_info=new emp();
$emp_info->a="Vishal";
$emp_info->b="SHARMA";
$sal=new emp();
$sal->a=27800;
$sal->b=39800;
echo "emp_info 1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "emp_info 2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>