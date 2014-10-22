<?php
$word = $_POST['cumle'];
echo ReplaceUnderscoreWithSpace($word);	
function ReplaceUnderscoreWithSpace($word) 
{
	if (justunderscore($word)) 
		{
			echo $word;
		}
	else 
	{
	$array = str_split($word);
	$first = 0;
	$last = count($array)-1;
		while ($array[$first]=="_") //ilk harf "_" mi?
		{
				$first++;	//ilkini atla
		}
		while ($array[$last]=="_")  //son harf "_" mi?
		{
				$last--;	//sonuncusunu atla
		}

	for( $i = $first; $i < $last; $i++) {  //baştan sona kadar ilerle
	
		if ($array[$i]=="_")		//karakter "_" ise
		{
			$array[$i] = " "; 		//boşlukla değiştir.
		}
	
	}
	return  implode("",$array);
}
}
function justunderscore($word)
{
$array2 = str_split($word);
$j=0;
	$underscore = true;
	while($j < count($array2)&& $underscore) 
	{
		if($array2[$j] == "_")
		{
			$j++;
			$underscore = true;
	}
		else
		{
			$underscore = false;
		}
	}
	return $underscore;
} 
?>
