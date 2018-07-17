<?php
echo 100£»
$a = new Redis();
$a->connect('10.0.0.11');
echo $a->get('name');
die;
interface  vist{
    public function go();
}
class leg implements   vist{
    public function go(){
        echo 'use leg to  yunnan';
    }
}   
class train  implements  vist{  
    public function go(){
        echo 'use train to yunan';
    }
}
class Traveller{ 
    protected  $traveTools;
    public function __construct(vist $traveTools){
        $this->traveTools = $traveTools;
    }
    public function vistTibet(){
        $this->traveTools->go();
    }
}
$leg = new train();
$travellver = new Traveller($leg);
$travellver->vistTibet();