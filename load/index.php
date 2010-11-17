<?php

$section = $_POST['section'];

function output_portfolio( $section, $image, $format = "png", $caption, $description, $work, $year, $site = null )
{
	$item = "<a class=\"item\" href=\"images/".$section."/".$image.".".$format."\" title=\"<span class='name'>";
	if( $site != null ) { $item .= "<a href='".$site."' target='_blank'>".$description."</a>"; }
	else { $item .= $description; }
	$item .= "</span><span class='right'>".$work." [".$year."]</span>\">
			<img src=\"images/".$section."/thumbs/".$image.".".$format."\" border=\"0\" />
			<div class=\"caption\">
				<span>".$caption."</span>
			</div>
		</a>";
	
	return $item;
}

if( $section == 'welcome' )
{
	?>
	<div id="welcome">
		<div class="cufon">Welcome to the latest version of my site</div>
		I spent far too much time designing and developing it but I feel it was worth it. There's more I want to do with the site but for I wanted to get things going by rolling out what I have so far. I will continue to develop the remaining features and will roll them out in the near future. I see this site as 2 things: as a place to put my work and as a way of inspiring other developers to try something a little out of the ordinary to push the interwebs to the next level. Oh and there's no Flash used on any of the site because I want to make sure the site is accessible to everyone. Anyways, that's it for now and I hope you enjoy the site.
	</div>
	<?
}
elseif( $section == 'recent' )
{
	?>
	recent
	<?
}
elseif( $section == 'about' )
{
	?>
	<div id="about">
		<div class="cufon">This is what I'm about</div>
		In case somehow you missed it, my name is Dave Fearon. I'm 27 ( and not overly happy about it ) and currently living in Ottawa, Ontario. For a living, I'm a Web/Serverside Developer at <a href="http://fuelindustries.com" target="_blank">Fuel Industries</a>, where I bring the interwebs to life. In my free time, you can usually find me either snowboarding, playing hockey or soccer, creating various things, playing video games and developing the interwebs (even though I do it for a living, I enjoy it soo much that I do it for fun).<br /><br />
		You can check out my resume <a href="pdfs/davefearon_resume.pdf" target="_blank">here</a> (with a more "printer friendly" version is <a href="pdfs/davefearon_resume_pf.pdf" target="_blank">here</a>).
	</div>
	<?
}
elseif( $section == 'portfolio' )
{
	?>
	<div class="innerportfolio">
		
		<?=output_portfolio( "sites", "megamind", "png", "McDonalds - Megamind", "McDonalds - Megamind", "Development", "2010", "http://myherohappymeal.eu" );?>
		
		<?=output_portfolio( "sites", "fuelgames", "png", "Fuel Games", "Fuel Games", "Development", "2010", "http://fuelgames.com" );?>
		
		<?=output_portfolio( "sites", "pebblesplay", "png", "Pebbles - Post Cereal", "Pebbles - Post Cereal", "Development", "2010", "http://pebblesplay.com" );?>
		
		<?=output_portfolio( "sites", "gottaplaceit", "png", "GottaPlace.it | A Placeholder Service", "GottaPlace.it | A Placeholder Service", "Design/Development", "2010", "http://gottaplace.it" );?>
		
		<?=output_portfolio( "sites", "quest", "png", "Agentinquest | Quest Software", "Agentinquest | Quest Software", "Development", "2009", "http://agentinquest.com" );?>
		
		<?=output_portfolio( "sites", "valemont", "png", "Valemont University", "Valemont University", "Development", "2009", "http://valemontu.com" );?>
		
		<?=output_portfolio( "sites", "sceneit", "png", "Scene-It?", "Scene-It?", "Development", "2009", "http://sceneitonline.com" );?>
		
		<?=output_portfolio( "designs", "rutilusvinum", "png", "Rutilus Vinum", "Rutilus Vinum", "Design", "2009" );?>
		
		<?=output_portfolio( "designs", "glasshouse_dvd", "png", "Glasshouse DVD Cover", "Glasshouse DVD Cover", "Design", "2009" );?>
		
		<?=output_portfolio( "designs", "glasshouse_businesscards", "png", "Glasshouse Business Cards", "Glasshouse Business Cards", "Design", "2009" );?>
		
		<?=output_portfolio( "sites", "rocktopusgames_website", "png", "Rocktopus Games Website", "Rocktopus Games Website", "Design/Development", "2009", "http://rocktopusgames.com" );?>
		
		<?=output_portfolio( "designs", "carleton_promoposter", "png", "Carleton University Promotional Poster", "Carleton University Promotional Poster", "Design", "2008" );?>
		
		<?=output_portfolio( "designs", "rocktopus_presents_glasshouse", "png", "Rocktopus Games Presents Glasshouse", "Rocktopus Games Presents Glasshouse", "Design", "2008" );?>
		
		<?=output_portfolio( "sites", "tellme", "png", "Tell Me What You Believe Now", "Tell Me What You Believe Now", "Design/Development", "2008", "http://tellmewhatyoubelievenow.com" );?>
		
		<?=output_portfolio( "photos", "oldDoor", "png", "Old Door", "Old Door", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "openForBusiness", "png", "Open For Business", "Open For Business", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "brightlights", "png", "Bright Lights", "Bright Lights", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "cityview", "png", "City View", "City View", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "nightlife", "png", "Night Life", "Night Life", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "streetlevel", "png", "Street Level", "Street Level", "Photographer", "2008" );?>
		
		<?=output_portfolio( "photos", "waterway", "png", "Waterway", "Waterway", "Photographer", "2008" );?>
		
		<?=output_portfolio( "designs", "wishYouWereHere", "png", "Wish You Were Here", "Wish You Were Here", "Design", "2008" );?>
		
		<?=output_portfolio( "designs", "cloud_people", "png", "Cloud People", "Cloud People", "Design", "2008" );?>
		
		<?=output_portfolio( "designs", "memories", "png", "Memories", "Memories", "Design", "2007" );?>
		
		<?=output_portfolio( "designs", "dream_eggscape", "png", "Dream Eggscape", "Dream Eggscape", "Design", "2007" );?>
		
		<?=output_portfolio( "sites", "v2", "png", "davefearon.com | v2", "davefearon.com | v2", "Design/Development", "2007" );?>
		
		<?=output_portfolio( "designs", "floating_free", "png", "Floating Free", "Floating Free", "Design", "2006" );?>
		
		<?=output_portfolio( "designs", "explosive_bloom", "png", "Explosive Bloom", "Explosive Bloom", "Design", "2006" );?>
		
		<?=output_portfolio( "photos", "catEyes", "png", "Cat Eyes", "Cat Eyes", "Photographer", "2006" );?>
		
		<?=output_portfolio( "designs", "crest", "png", "Personal Crest", "Personal Crest", "Design", "2006" );?>
		
	</div>
	<?
}
elseif( $section == 'social' )
{
	?>
	social
	<?
}
elseif( $section == 'contact' )
{
	?>
	
	<div id="contact">
		<div class="cufon">Looking to find me? Well you've come to the right section.</div>
		email | <a href="mailto:hello@davefearon.com" id="email">hello@davefearon.com</a><br />
		Skype | dave.fearon<br />
		Twitter | <a href="http://twitter.com/home?status=@davefearon I was on your site and I love it! %23davefearon" target="_blank" class="aTwitter">davefearon</a><br />
		Facebook | <a href="http://facebook.com/dave.fearon" target="_blank" class="">Dave Fearon</a>
		
		<div id="map_canvas"></div>
	</div>
   
	<?
	/* <b>MSN:</b> dave.fearon@gmail.com<br /> */
	/* <b>AIM:</b> davefearon7<br /> */
}
else
{
	?>
	No dice!
	<?
}

?>