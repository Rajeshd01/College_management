<?php
	$db=new mysqli("localhost:8080","Rajesh","college");
	if(!$db)
	{
		echo "failed";
	}
    else{
        echo "connected";
    }
    
?>