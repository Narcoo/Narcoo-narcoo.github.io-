<?php 
	echo "test";
	$menu = json_decode(file_get_contents("menu.json"),true);

	


	function pizza()
	{
		global $menu;
		echo'
			<section id="food-section1" class="food-section">
					<header id="food-section1-header">
						<h3>
							Pizza
						</h3>
					</header>
					<article class="food-section-article" id="food-section1-article">

		';
		foreach ($menu['menu']['pizza'] as $pizzakey => $pizza) 
		{
			$pizzaId = $pizza['pizza_id'];
			$pizzaName = $pizza['pizza_name'];
			$pizzaIng = $pizza['pizza_ingredients'];
			$pizzaPrice = $pizza['pizza_price'];

			echo '
				
						<div class="food-section-row">
							<h3>
								<span class="menu-name">'.$pizzaName.'</span>
								<span class="menu-dots"></span>
								<span class="menu-price">'.$pizzaPrice.'</span>
							</h3>
							<div class="food-ingredients">
								<span>'.$pizzaIng.'</span>
							</div>
						</div>

					
			';
		}
		echo '
			</article>
				</section>
		';
	}

	function salads()
	{
		global $menu;
		echo'
			<section id="food-section1" class="food-section">
					<header id="food-section1-header">
						<h3>
							Salads
						</h3>
					</header>
					<article class="food-section-article" id="food-section1-article">

		';
		foreach ($menu['menu']['salad'] as $saladkey => $salad) 
		{
			$saladId = $salad['salad_id'];
			$saladName = $salad['salad_name'];
			$saladIng = $salad['salad_ingredients'];
			$saladPrice = $salad['salad_price'];

			echo '
				
						<div class="food-section-row">
							<h3>
								<span class="menu-name">'.$saladName.'</span>
								<span class="menu-dots"></span>
								<span class="menu-price">'.$saladPrice.'</span>
							</h3>
							<div class="food-ingredients">
								<span>'.$saladIng.'</span>
							</div>
						</div>

					
			';
		}
		echo '
			</article>
				</section>
		';
	}

	function grill()
	{
		global $menu;
		echo'
			<section id="food-section1" class="food-section">
					<header id="food-section1-header">
						<h3>
							Grill
						</h3>
					</header>
					<article class="food-section-article" id="food-section1-article">

		';
		foreach ($menu['menu']['grill'] as $grillkey => $grill) 
		{
			$grillId = $grill['grill_id'];
			$grillName = $grill['grill_name'];
			$grillIng = $grill['grill_ingredients'];
			$grillPrice = $grill['grill_price'];

			echo '
				
						<div class="food-section-row">
							<h3>
								<span class="menu-name">'.$grillName.'</span>
								<span class="menu-dots"></span>
								<span class="menu-price">'.$grillPrice.'</span>
							</h3>
							<div class="food-ingredients">
								<span>'.$grillIng.'</span>
							</div>
						</div>

					
			';
		}
		echo '
			</article>
				</section>
		';
	}
	function beer()
	{
		global $menu;
		echo'
			<section id="food-section1" class="food-section">
					<header id="food-section1-header">
						<h3>
							Beer
						</h3>
					</header>
					<article class="food-section-article" id="food-section1-article">

		';
		foreach ($menu['menu']['beer'] as $beerkey => $beer) 
		{
			$beerId = $beer['beer_id'];
			$beerName = $beer['beer_name'];
			$beerIng = $beer['beer_ingredients'];
			$beerPrice = $beer['beer_price'];

			echo '
				
						<div class="food-section-row">
							<h3>
								<span class="menu-name">'.$beerName.'</span>
								<span class="menu-dots"></span>
								<span class="menu-price">'.$beerPrice.'</span>
							</h3>
							<div class="food-ingredients">
								<span>'.$beerIng.'</span>
							</div>
						</div>

					
			';
		}
		echo '
			</article>
				</section>
		';
	}
 ?>