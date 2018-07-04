<?php
class TodoAction extends CTKAction{
    
    public function run(){

    	$this->getController()->layout = "//layouts/empty";
    	$list = array("un","deux","trois","quatre",);
		echo $this->getController()->render( "todo" ,array( 
									 			"list" => $list ));
    }
}
