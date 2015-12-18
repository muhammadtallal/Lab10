<!DOCTYPE html>
<html>
<body>
<?php
$Error = $word = $result = "";
$str = file_get_contents('https://raw.githubusercontent.com/adambom/dictionary/master/dictionary.json');
$json = json_decode($str, true);

		$word = $_POST["word"];
				foreach($json as $key => $value){
					if(strpos($key,strtoupper($word))>=0){
						$result .= $key.": ".$value."<br><br>";
					}
				}
 
?>
<h1 align="center">Dictionary</h1><br>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" align="center"> 
   <input type="text" name="word" size="35" value="<?php echo $word;?>">&nbsp;&nbsp;
   <input id = "button" type="submit" value="Search"></br></br> 
</form>
<?php
echo $result;
?>
</body>
</html>