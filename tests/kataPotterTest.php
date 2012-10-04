<?php
include_once "../kataPotter.php";


class kataPotterTest extends PHPUnit_Framework_TestCase {
	
   /**
     * @dataProvider bateria
     */
    public function testaPotter()
    {
		$obj = new kataPotter();
        $this->assertEquals($resultado, $obj->calcula());
    }
 
    public function bateria()
    {
		return array(
        	/*array('1',1),
			array('2',2),
			*/);
    }
}
?>