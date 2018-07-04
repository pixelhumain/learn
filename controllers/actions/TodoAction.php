<?php
class TodoAction extends CTKAction{
    
    public function run(){
    	
		$res = array(
			"explication" => "une TODO est un POI de type TODO",
			"add" => "Ajouter une todo",
			"remove" => "Effacer une Todo",
			"modifier" => "Changer une Todo",
			"get" => "lire un todo",
			"list" => "chargé toutes les todo" );
		
    	echo Rest::json( $res );
    }
}
