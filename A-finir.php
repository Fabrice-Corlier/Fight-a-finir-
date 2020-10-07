<?php
class Combattant {
        public $_health = 100 ;
        public $_weapon ;
        public $_niv ;}

class epee extends Combattant {
    public $_atk = 20 ;
    public $_Vatk = 3 ;
}

class dagues extends Combattant {
    public $_atk = 10 ;
    public $_Vatk = 6 ;
}

class lance extends Combattant {
    public $_atk = 30 ;
    public $_Vatk = 2 ;
}

class hache extends Combattant {
    public $_atk = 60 ;
    public $_Vatk = 1 ;
}

class Niveau extends Combattant {
        public $_junior ;
        public $_confirme ;
        public $_veteran ;

}

$perso1 = new Combattant;
$perso2 = new Combattant;


    function niveauDattaque ($_junior, $_confirme, $_veteran, $randomlvl,$plvl){
        $lvl = array('1', '2' ,'3' );
        $randomlvl = array_rand($lvl);
        if ($randomlvl == 1){
            $plvl = $_junior;
        }
        elseif($randomlvl == 2){
            $plvl == $_confirme;
        }
        else{
            $plvl == $_veteran ;
        }
        echo $plvl;
        return;
    }


// class Armes extends Combattant{
//         public $_atk ;
//         public $_Vatk ;
//         public function Hlower($_health, $_atk, $_Vatk){
//             $_health = $_health - ($_atk * $_Vatk)};
        

        function randomArme ($randomWeap, $weap1, $weap2, $weap){
        $weap = array('1', '2' ,'3', '4' );
        $randomWeap = array_rand($weap);
        
        

        if ($weap == 1){
            $weap = new dagues ;
        }
        elseif($weap == 2){
            $weap == new epee ;
        }
        elseif($weap == 3){
            $weap == new lance ;
        }
        else{
            $weap == new hache ; 
        }
        
        echo "arme "$perso1" : ", $weap;
        return;
    }
    
    
    
    if ($perso1->_health > 0 && $perso2->_health > 0 ){
            randomArme ( $randomWeap,
            $weap1,
            $weap2,
            $weap) ;
            echo "nouvelles armes";
            echo "arme 1 : "; $perso1->_weapon;
            echo "arme 2 : ", $perso2->_weapon;
    }
    elseif ($perso1->_health <=0 ){
        echo "Combattant 2 victorieux";
    }

    elseif($perso2->_health <=0 ){
        echo "Combattant 1 victorieux";
    }



?>