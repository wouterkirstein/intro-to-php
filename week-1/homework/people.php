

<!DOCTYPE html>
<html>
	<head>
		<title>Homework // Week 1</title>

		<!--
			We're using Bootstrap to make styling stuff super easy.
			Go read up here: http://getbootstrap.com/css/
		-->
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="mystyle.css">

	</head>
	<body>

		<div class="container">

			<h1>A List of People</h1>
			<hr>

			<?php

function build_table($array){

    // start table

    $html = '<table>';

    // header row

    $html .= '<tr>';

    foreach($array[0] as $key=>$value){

            $html .= '<th>' . $key . '</th>';

        }

    $html .= '</tr>';

    // data rows

    foreach( $array as $key=>$value){

        $html .= '<tr>';

        foreach($value as $key2=>$value2){

            $html .= '<td>' . $value2 . '</td>';

        }

        $html .= '</tr>';

    }

    // finish table and return it

    $html .= '</table>';

    return $html;

}

$people = array(
		array("Name" => "September",	"Surname" => "Parker"),
		array("Name" => "Serina",		"Surname" => "Wall"),
		array("Name" => "Courtney",		"Surname" => "Buckley"),
		array("Name" => "Orson",		"Surname" => "Bell"),
		array("Name" => "Murphy",		"Surname" => "Mcintyre"),
		array("Name" => "Brady",		"Surname" => "Wolfe"),
		array("Name" => "Zachery",		"Surname" => "Andrews"),
		array("Name" => "Blake",		"Surname" => "Nicholson"),
		array("Name" => "Idola",		"Surname" => "Mullen"),
		array("Name" => "Nora",			"Surname" => "Hansen"),
		array("Name" => "Melodie",		"Surname" => "Pruitt"),
		array("Name" => "Hillary",		"Surname" => "Morrison"),
		array("Name" => "Halla",		"Surname" => "Melendez"),
		array("Name" => "Jada",			"Surname" => "Clements"),
		array("Name" => "Judah",		"Surname" => "Sampson"),
		array("Name" => "Germaine",		"Surname" => "Joyce"),
		array("Name" => "Hector",		"Surname" => "Sosa"),
		array("Name" => "Idona",		"Surname" => "Quinn"),
		array("Name" => "Lucian",		"Surname" => "Little"),
		array("Name" => "Lara",			"Surname" => "Nolan"),
		array("Name" => "Kendall",		"Surname" => "Rosa"),
		array("Name" => "Grace",		"Surname" => "Shelton"),
		array("Name" => "Quinn",		"Surname" => "Goodwin"),
		array("Name" => "Brady",		"Surname" => "Alford"),
		array("Name" => "Ramona",		"Surname" => "Alvarez"),
		array("Name" => "Tiger",		"Surname" => "Mcgee"),
		array("Name" => "Murphy",		"Surname" => "Contreras"),
		array("Name" => "Imogene",		"Surname" => "Silva"),
		array("Name" => "Matthew",		"Surname" => "Bates"),
		array("Name" => "Addison",		"Surname" => "Collier"),
		array("Name" => "Caryn",		"Surname" => "Keller"),
		array("Name" => "Mikayla",		"Surname" => "Alvarado"),
		array("Name" => "Rana",			"Surname" => "Finch"),
		array("Name" => "Jordan",		"Surname" => "Erickson"),
		array("Name" => "Beatrice",		"Surname" => "Coleman"),
		array("Name" => "Macey",		"Surname" => "Atkins"),
		array("Name" => "Kristen",		"Surname" => "Parrish"),
		array("Name" => "Russell",		"Surname" => "Farley"),
		array("Name" => "Lucius",		"Surname" => "Ayers"),
		array("Name" => "Dillon",		"Surname" => "Martin"),
		array("Name" => "Edan",			"Surname" => "Randall"),
		array("Name" => "Shelly",		"Surname" => "West"),
		array("Name" => "Jonah",		"Surname" => "Woods"),
		array("Name" => "Veda",			"Surname" => "Flynn"),
		array("Name" => "Holmes",		"Surname" => "Moran"),
		array("Name" => "Astra",		"Surname" => "Perry"),
		array("Name" => "Zane",			"Surname" => "Rogers"),
		array("Name" => "Alexis",		"Surname" => "Landry"),
		array("Name" => "Caesar",		"Surname" => "Ware"),
		array("Name" => "Fatima",		"Surname" => "Duncan"),
		array("Name" => "Alisa",		"Surname" => "Rojas"),
		array("Name" => "Whilemina",	"Surname" => "Glover"),
		array("Name" => "Rhona",		"Surname" => "Turner"),
		array("Name" => "Doris",		"Surname" => "Dean"),
		array("Name" => "Keane",		"Surname" => "Whitney"),
		array("Name" => "Eagan",		"Surname" => "Blevins"),
		array("Name" => "Ivy",			"Surname" => "Ware"),
		array("Name" => "Dahlia",		"Surname" => "Bartlett"),
		array("Name" => "Jessica",		"Surname" => "Bowen"),
		array("Name" => "Barclay",		"Surname" => "Spears"),
		array("Name" => "Graham",		"Surname" => "Andrews"),
		array("Name" => "Carla",		"Surname" => "Mcmahon"),
		array("Name" => "Helen",		"Surname" => "Benjamin"),
		array("Name" => "Bell",			"Surname" => "Cleveland"),
		array("Name" => "Baxter",		"Surname" => "Patterson"),
		array("Name" => "Summer",		"Surname" => "Brooks"),
		array("Name" => "Brooke",		"Surname" => "Byers"),
		array("Name" => "Flavia",		"Surname" => "Roberson"),
		array("Name" => "Basil",		"Surname" => "Mercer"),
		array("Name" => "Ebony",		"Surname" => "Brock"),
		array("Name" => "Charde",		"Surname" => "Cash"),
		array("Name" => "Brady",		"Surname" => "Mercer"),
		array("Name" => "Rajah",		"Surname" => "Logan"),
		array("Name" => "Kay",			"Surname" => "Austin"),
		array("Name" => "Declan",		"Surname" => "Kaufman"),
		array("Name" => "Signe",		"Surname" => "Slater"),
		array("Name" => "Fiona",		"Surname" => "Poole"),
		array("Name" => "Mannix",		"Surname" => "Oneal"),
		array("Name" => "Louis",		"Surname" => "Ellison"),
		array("Name" => "Bell",			"Surname" => "Gilmore"),
		array("Name" => "Dahlia",		"Surname" => "Mitchell"),
		array("Name" => "Heather",		"Surname" => "Roberts"),
		array("Name" => "Mannix",		"Surname" => "Goodman"),
		array("Name" => "Lamar",		"Surname" => "Ellis"),
		array("Name" => "Lionel",		"Surname" => "Bernard"),
		array("Name" => "Jonah",		"Surname" => "May"),
		array("Name" => "Audra",		"Surname" => "Ballard"),
		array("Name" => "Iris",			"Surname" => "Spencer"),
		array("Name" => "Eagan",		"Surname" => "Whitney"),
		array("Name" => "Rafael",		"Surname" => "Cardenas"),
		array("Name" => "Kirsten",		"Surname" => "Crane"),
		array("Name" => "Jermaine",		"Surname" => "Patrick"),
		array("Name" => "Ria",			"Surname" => "Farmer"),
		array("Name" => "Demetria",		"Surname" => "Foley"),
		array("Name" => "Tarik",		"Surname" => "Prince"),
		array("Name" => "Driscoll",		"Surname" => "Simpson"),
		array("Name" => "Hall",			"Surname" => "Mclaughlin"),
		array("Name" => "Brianna",		"Surname" => "Silva"),
		array("Name" => "Porter",		"Surname" => "Trujillo"),
		array("Name" => "Lester",		"Surname" => "Buchanan")
	);

echo build_table($people);

?>

			<!-- <p>Oops, there's nothing here yet! Please check the source code.</p>-->

		</div>

		<!--
			This is Bootstrap's JavaScript
			It allows us to add functional stuff (ahem, brownie points!) to the UI elements we create.
			  Maybe a sortable table? What about searchable? Pagination?
		-->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>
</html>