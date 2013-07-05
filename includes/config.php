<?php

//The name of the project that will be displayed to the user
$projectName = "Project Name";

//A list of the different pages that should show in the tab bar.  
//title = what goes after project name in <head><title></title></head>
//filename = the actual script filename.  used for calculating current page, and for the navbar link
//buttonTitle = the title of the button to show on the navbar
$navBarPages = 	array(
			array("title" => "A great project", "filename" => "index.php", "buttonTitle" => "Home"),
			array("title" => "About us", "filename" => "about.php", "buttonTitle" => "About")
			
		);

//fill $curPage with the item in the $navBarPages array that corresponds to the currently being viewed page.
$scriptName = basename($_SERVER['SCRIPT_FILENAME']);
foreach($navBarPages as $aPage){
	if($aPage['filename'] == $scriptName){
		$curPage = $aPage;
		break;
	}
}



?>
