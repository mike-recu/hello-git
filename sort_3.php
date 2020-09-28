<?php
	//Quick sort
	function insertion_sort($my_array)
	{
		for ($i=1; $i < count($my_array); $i++) 
		{ 
			$temp = $my_array[$i];
			$j=$i-1;
			while ($temp<$my_array[$j]) 
			{
				$my_array[$j+1] = $my_array[$j];
				$j--;
				if($j==-1)
				{
					break;
				}
			}
			$my_array[$j+1] =$temp;
		}
		return $my_array;
	}

	$my_array = array(3, 0, 2, 5, -1, 4, 1);

	echo implode(',', $my_array)."<br>";
	echo implode(',', insertion_sort($my_array));
?>