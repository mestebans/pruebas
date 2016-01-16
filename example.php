<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
ul{
border: 1px solid #dadada;
width: 200px;
list-style: none;
overflow: hidden;
/*overflow-x: auto;*/
padding: 10px;
}
li .liga{
display: block;
text-decoration: none;
text-align: left;
padding: 5px;
}
li .liga:hover{
background-color: steelblue;
color: white;
}
</style>
</head>
<body>
	<ul>
<li><a href="javascript: return void(0);">Enlace1</a></li>
<li><a href="javascript: return void(0);">Enlace2</a></li>
<li><a href="javascript: return void(0);">Enlace3</a></li>
<li><a href="javascript: return void(0);">Enlace4</a></li>
<li><a href="javascript: return void(0);">Enlace5</a></li>
</ul>

<ul>
<li><a class="liga" href="javascript: return void(0);">Enlace1</a></li>
<li>
<span class="liga" style="width: 250px; bordeR: 1px solid #006699;">
Watashi wa watashi
<hr /> Soy un span
</span>
</li>
<li><button class="liga">Soy un botón</button></li>
<li><a class="liga" href="javascript: return void(0);">Enlace4</a></li>
<li><a class="liga" href="javascript: return void(0);">Enlace5</a></li>
</ul>
</body>
</html>