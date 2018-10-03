<?php

trait First
{
	
	private function fun()
	{
		echo "Fun Function from trait first";		
	}
}

class Father
{
	
	public function fun2()
	{
		echo "hello private";
	}
} 


class Base extends Father
{
	use First;

	public function fun1()
	{
		echo "fdgfd";
	}

}


$obj = new Base();

 $obj->fun();




?>