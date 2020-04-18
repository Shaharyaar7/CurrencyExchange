
<?php
if(isset($_POST['submit']))
{
		
	$amount = $_POST['amount'];
	$cur1 = $_POST['cur1'];
	$cur2 = $_POST['cur2'];
	 
	
	echo "<center><h1>Your Converted Amount is:</h1><br></center>";

	if($cur1=="USD" AND $cur2=="INR"){
	echo "<center><h1>" . "&#x20B9;" . " " . $amount* 76.54 . "</h1></center>";
	}
	 
	if($cur1=="USD" AND $cur2=="AUD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*1.57 . "</center>";
	}
	 
	if($cur1=="USD" AND $cur2=="USD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*1 . "</center>";
	}

	if($cur1=="USD" AND $cur2=="JPY"){
	echo "<center><h1>" . "&#165;" . " "  . $amount*108  . "</center>";
	}

	if($cur1=="USD" AND $cur2=="PHP"){
	echo "<center><h1>" . "&#x20B1;" . " "  . $amount*50.79 . "</center>";
	}

	#---------------------------------------------------------------------------#


	if($cur1=="INR" AND $cur2=="INR"){
	echo "<center><h1>" . "&#x20B9;" . " "  . $amount*1 . "</center>";
	}
	 
	if($cur1=="INR" AND $cur2=="AUD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.02 . "</center>";
	}
	 
	if($cur1=="INR" AND $cur2=="USD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.01. "</center>";
	}

	if($cur1=="INR" AND $cur2=="JPY"){
	echo "<center><h1>" . "&#165;" . " "  . $amount*1 . "</center>";
	}

	if($cur1=="INR" AND $cur2=="PHP"){
	echo "<center><h1>" . "&#x20B1;" . " "  . $amount*0.66. "</center>";
	}

	#---------------------------------------------------------------------------#




	if($cur1=="JPY" AND $cur2=="INR"){
	echo "<center><h1>" . "&#x20B9;" . " "  . $amount* 0.71. "</center>";
	}
	 
	if($cur1=="JPY" AND $cur2=="AUD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.01 . "</center>";
	}
	 
	if($cur1=="JPY" AND $cur2=="USD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.01. "</center>";
	}

	if($cur1=="JPY" AND $cur2=="JPY"){
	echo "<center><h1>" . "&#165;" . " "  . $amount*1 . "</center>";
	}

	if($cur1=="JPY" AND $cur2=="PHP"){
	echo "<center><h1>" . "&#x20B1;" . " "  . $amount*0.47. "</center>";
	}

	#---------------------------------------------------------------------------#





	if($cur1=="PHP" AND $cur2=="INR"){
	echo "<center><h1>" . "&#x20B9;" . " "  . $amount* 1.51. "</center>";
	}
	 
	if($cur1=="PHP" AND $cur2=="AUD"){
	echo"<center><h1>" . "&#36;" . " "  . $amount*0.03. "</center>";
	}
	 
	if($cur1=="PHP" AND $cur2=="USD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.02. "</center>";
	}

	if($cur1=="PHP" AND $cur2=="JPY"){
	echo "<center><h1>" . "&#165;" . " "  . $amount*2 . "</center>";
	}

	if($cur1=="PHP" AND $cur2=="PHP"){
	echo "<center><h1>" . "&#x20B1;" . " "  . $amount*1 . "</center>";
	}

	#---------------------------------------------------------------------------#




	if($cur1=="AUD" AND $cur2=="INR"){
	echo "<center><h1>" . "&#x20B9;" . " "  . amount*48.71 . "</center>";
	}
	 
	if($cur1=="AUD" AND $cur2=="AUD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*1 . "</center>";
	}
	 
	if($cur1=="AUD" AND $cur2=="USD"){
	echo "<center><h1>" . "&#36;" . " "  . $amount*0.64 . "</center>";
	}

	if($cur1=="AUD" AND $cur2=="JPY"){
	echo "<center><h1>" . "&#165;" . " "  . $amount*68 . "</center>";
	}

	if($cur1=="AUD" AND $cur2=="PHP"){
	echo "<center><h1>" . "&#x20B1;" . " "  . $amount*32.33 . "</center>";
	}

	#---------------------------------------------------------------------------# 
	
}


?>