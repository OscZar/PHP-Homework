<?php
$name = "Руслан";
$surname = "Габитов";
$age = 15;
$vk = 'https://vk.com/id55035550';
$city = 'Ульяновск';
$about = 'ПРОСТО ЛУЧШИЙ, после Миши';
?>
<!Doctype html>
<html>
<head>
	<title><?= $surname . ' ' . $name; ?></title>
	<meta charset = "utf-8">
	<style type = "text/css">
	    body {
	    	font-family: sans-serif;
		}

		dl {
			display: table-row;
	    }

	    dt, dd {
	    	display: table-cell;
	    	padding: 3px 8px;
	    }
	</style>
</head>

<body>
	<h1>Страница пользователя <?=$surname . ' ' . $name; ?></h1>
	    <dl>
	    	<dt>Имя</dt>
	    	<dd><?= $name; ?></dd>
	    </dl>
	    <dl>


	    	<dt>Возраст</dt>
	    	<dd><?= $age; ?></dd>
	    </dl>



	    
	    <dl>
	    	<dt>ВКонтакте</dt>
	    	<dd><a href="<?= $vk; ?>"><?= $vk; ?></a></dd>
	    </dl>
	    <dl>
	    	<dt>Город</dt>
	    	<dd><?= $city; ?></dd>


	    </dl>
	    <dl>

	    	<dt>0 себе</dt>	
	    	<dd><?= $about; ?></dd>
	    </dl>

</body>
</html>