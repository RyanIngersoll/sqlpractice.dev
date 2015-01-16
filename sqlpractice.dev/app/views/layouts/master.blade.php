<!DOCTYPE html>
<html lang="en">
<head>
    <title>SQL Practice</title>
</head>
<?php 
	$names = array('first' => 'ryan', 'middle' => 'daniel'); 

	
	var_dump($names);

?>

<body>
    @yield('content')
    <h1>SQL Practice Dev</h1>

    @foreach ($names as $name)
    <h1>{{{ $name }}}</h1>
@endforeach



</body>
</html>