<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1,initial-scale=1"/>
	<title>Баннер</title>
	
	<link href="css/stylesBANNER.css" rel="stylesheet" media="all">
	
	<script src="js/savepng.js" defer></script>
	<script src="js/img.js" defer></script>
	<script src="js/clear.js" defer></script>
	<script src="js/color.js" defer></script>
	<script src="js/copyHTML.js" defer></script>
	<!-- <script src="js/png.js" defer></script> -->

	
</head>

<body>

	<header>
		<div class="banner-parameters">
			<form class="banner" id="banner" >
				<div id="list" value=""></div>
				<input id="text" type="text" value="Текст" >

			</form>
			<form class="parameters" >

				<label for="file" class="chous" >Выберите фон</label>
				<input type="file" id="file" name="file" onclick="clearForm()">
				
				<label for="button" class="delete" >Удалить фон</label>
				<a type="button" id="button"></a>
				
				<label for="btn-Color-hidden" class="chous"  id="color">Выберите цвет</label>
				<input type="color" id="btn-Color-hidden" >
	
				 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				  width="500px" height="500px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
				  
				  <path id="path" fill="#FFFFFF" stroke="#231F20" stroke-miterlimit="10" d="M291.451,51.919v202.54c0,0,164.521,119.846,140.146,0
					  C407.227,134.613,291.451,51.919,291.451,51.919z"/>
				  
				  </svg>
				
			</form>
		</div>
		<menu class="menu">		
			<li class="knopka">save</li>
			<li class="knopka"><input type="button" id="copyHTML">copy</li>
			<li class="knopka">json</li>
		</menu>
		
		

		<!-- 
		<img id="Img" src='../img/twise.JPG' width="107" height="98">
		<button onclick="document.getElementById('Img').src='../img/1.jpg'">Да</button>
		<button onclick="document.getElementById('Img2')">Да</button>
		
		<a href="javascript:void(0);" onclick="save()">Save</a>
		
		<input type="file" class="444"form="Img2">
		 -->
	</header>	

</body>