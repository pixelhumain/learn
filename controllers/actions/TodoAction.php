<?php
class TodoAction extends CTKAction{
    
    public function run(){

    	$this->getController()->layout = "//layouts/empty";
    	$list = array(
    		"une TODO est un POI de type TODO",
			"Ajouter une todo",
			"Effacer une Todo",
			"Changer une Todo",
			"lire un todo",
			"chargé toutes les todo" );
		echo $this->getController()->render( "todo" ,array( 
									 			"list" => $list ));
    }
}
