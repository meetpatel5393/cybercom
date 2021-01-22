<?php 
	//phpinfo
	//phpinfo(); //this function will show all detail of our php installation and all of the detail about our php.

	//echo and print
	$name = 'meet';
	echo "In double quote if we pass variable name then it will be print $name <br>";
	echo 'In single quote if we pass variable name then it will not print it just show name of variable $name <- like this , so if we want to show variable value then we need to put (.) before variable name like -> .$var_name <br>';
	print("echo has no return value while print has a return value of 1 so it can be used in expressions.").'<hr>';

	//output html using echo
	echo "
		<input type='text' name='name'><hr>
	";

	//embedding php inside html
	echo "
		<input type='text' name='name' value='$name'><hr>
	";

	//error reporting (error vs warning)
	echo mk ; //this will show warning - warning doesn't stop execution it will show remaining output
	//echo mk //this will show error because we missing to put (;) so it will stop execution and show error

	//variable
	$a = 1; //so like this using ($) sign. we can define variable in php file , php variable is dynamic , means we don't need to specify type of variable it automatically take itself from data.

	//concatination
	$firstname = 'meet';
	$lastname = 'kapadiya';
	echo 'Hey , i\'m '.$firstname.' '.$lastname;
	echo "Hey , i'm $firstname $lastname<hr>";

	//if else condition
	$b = 2;
	if($b === 1){//triple equal - which is check value as well as data type of both value
		echo 'B is '.$b.'<hr>';
	}
	else{
		echo "B is $b<hr>";
		$b = 1; //assigment operator =, -= ,+= ,*= ,/=.
	}

	//while
	$c = 2; 
	while ($c > 0) {
		# code...
		echo "$c<br>";
		$c--;
	}
	echo '<hr>';

	//switch statement
	$d = 3;
	switch($d){
		case 1:
			echo 1;
			break;
		case 2:
			echo 2;
			break;
		default :
			echo 'default';
	}
	echo '<hr>';

	//do while loop
	$e = 3;
	do{
		echo "done $e <br>";
		$e--;
	}while($e>1);
	echo "<hr>";

	//for  loop
	for ($i=0; $i<=2; $i++)
	{ 
		echo "string $i<br>";
	}
?>