<?php
	// define('DS', DIRECTORY_SEPARATOR);
	// $dir =  getcwd();

	// //chdir($dir.'/php_project'); 
	// echo getcwd();

	// 		$file = glob(getcwd().'/*');
	// 		echo "<pre>";
	// 		print_r($file);
// 		//rename($dir.'/php_project1',$dir.'/php_project');
// 		if(is_dir('/php_project')){
// 			echo "exists";
// 	}	
// //mkdir(getcwd().'/nitesh');
// $path = getcwd().'/php_project/';
// if(is_dir($path)){
// 	$file = opendir($path);
// 	while(($file1 = readdir($file))!==false){
// 		echo 'filename '.$file1."<br>";
// 	}
// 	closedir($file);
// }

//echo gmp_abs(-45);

// $v = 'de?mo';
// echo addcslashes($v, 'e')."<br>";
// echo addslashes($v);
//echo gmp_strval($abs2) . "\n";

	//rmdir(getcwd().'/nitesh');
//echo 'www'.DS.'app'.DS.'index'; 



//DIRECTORY_SEPARATOR
//chdir();
//mkdir();
//rename();
//is_dir();
//getcwd();
//touch();
//rmdir();
//readdir();
//opendir();
//rewinddir();;
//closedir();
	// $attr = ['id' => 'myform','name'=>'form'];
	// echo form_open($attr);
	// echo form_label('first_name');
	// $attr = ['name'=>'f_name','value'=>'','id'=>'dd'];
	// echo form_input($attr);
	// echo  form_password();
	// echo form_textaraa();

// echo password_hash('test123',PASSWORD_DEFAULT)."<br>";
// echo password_verify('test123',password_hash('test123',PASSWORD_DEFAULT));


?>

<html>
	<head>
		<title>ajax Example</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
				$('#suggestion').keyup(function(){
					var value = $('input').val();
					$.getJSON('ajax_example/get_suggestion.php',
						{value:value},function(data,status){
						$('#test').html(data);
					});
				});
			});

		</script>
	</head>

	<body>
		<input type="text" name="sugg" id="suggestion" value="">
		<div id="test"></div><br>
		</body>
</html>