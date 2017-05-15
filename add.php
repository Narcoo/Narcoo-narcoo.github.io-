<?php 

	$name = $_POST['name'];
	$price = $_POST['price'];
	$ing = $_POST['ing'];
	$menu = json_decode(file_get_contents("menu.json"),true);
	
	
	$i = null;
	$s = null;
	$b = null;
	$g = null;
	if(isset($_POST['submit']))
	{

		foreach($menu['menu']['pizza'] as $key => $value)
		{
			$i++;
		}
		$i++;
		$array = array("pizza_id" => $i, "pizza_name" => $name, "pizza_ingredients" => $ing,"pizza_price"=> $price);

		array_push($menu['menu']['pizza'], $array);
		
		file_put_contents("menu.json", json_encode($menu));
		echo "<pre>";
		print_r($menu);
		echo "</pre>";
	}
	if(isset($_POST['salad_submit']))
	{
		foreach($menu['menu']['salad'] as $key => $value)
		{
			$s++;
		}
			$s++;
			$salad = array("salad_id" => $s, "salad_name" => $name, "salad_ingredients" => $ing, "salad_price" => $price);
			array_push($menu['menu']['salad'], $salad);
			file_put_contents("menu.json", json_encode($menu));

		
	}
	if(isset($_POST['beer_submit']))
	{
		foreach($menu['menu']['beer'] as $key => $value)
		{
			$b++;
		}
			$b++;
		$beer = array("beer_id" => $b, "beer_name" => $name, "beer_ingredients" => $ing, "beer_price" => $price);
		array_push($menu['menu']['beer'], $beer);
		file_put_contents("menu.json", json_encode($menu));
	}
	if(isset($_POST['grill_submit']))
	{
		foreach($menu['menu']['grill'] as $key => $value)
		{
			$g++;
		}
			$g++;
		$grill = array("grill_id" => $g, "grill_name" => $name, "grill_ingredients" => $ing, "grill_price" => $price);
		array_push($menu['menu']['grill'], $grill);
		file_put_contents("menu.json", json_encode($menu));
	}

	echo'

		<form action="" method="post" accept-charset="utf-8">
			
			<input type="text" name="name" value="" placeholder="Name" required>
			<input type="text" name="price" value="" placeholder="price" required>
			<input type="text" name="ing" value="" placeholder="ing">
			<button type="submit" name="submit" value="">Pizza</button>
			<button type="submit" name="salad_submit" value="">Salad</button>
			<button type="submit" name="beer_submit" value="">Beer</button>
			<button type="submit" name="vine_submit" value="">Vine</button>
			<button type="submit" name="grill_submit" value="">Grill</button>

		</form>
	';

	echo "<pre>";
	print_r($menu);
	echo "</pre>";
 ?>