<?php

if (!$_REQUEST['name']) {echo "Nombre no válido"; die();}
if (!$_REQUEST['title']) {echo "Titulo no válido"; die(); }
if (empty($_FILES) || empty($_FILES['upimg']) || $FILES['upimg']['error'] != 0) {echo "Archivo no válido"; die();}
	
$filename = time() . sha1($_FILES['name']);
$name = $_REQUEST['name']; 
$title = $_REQUEST['title']; 

//upload image 
if (!is_dir("upload")) mkdir("upload");

$path = "upload/" . $filename;
 
if(!copy($_FILES['upimg']['tmp_name'], $path))  {echo "No se pudo copiar archivo";die();}


//base image and text 
$im = writeToImage('upload/template.jpg', $path, $name ,$title);
unlink($path);

header("Content-type: image/jpeg"); 

imagejpeg($im);

// function writeToImage($imagefile, $uploaded, $text1, $text2){
function writeToImage($imagefile, $uploaded, $text1, $text2){
	$w = 126;
	$h = 152;

	if(!file_exists($imagefile)) {
		die ("No existe imagen " . $imagefile);
	}
	
	$im = imagecreatefromjpeg($imagefile);
	$im2 = resizeImage($uploaded, $w, $h); 
	
	$text_color = imagecolorallocate($im, 0, 0, 0); 
    
    imagestring($im, 10, 290, 165, "$text1", $text_color ); 
    imagestring($im, 10, 290, 220, "$text2", $text_color);
    imagecopyresampled($im, $im2, 70, 145, 0, 0, $w, $h, $w, $h);
	// x, y, x source, y source, w source, h source, w source, h source
	return $im;
}

function resizeImage($img, $w, $h) {
	$info = getimagesize($img);
	
	$w_original = $info[0];
	$h_original = $info[1];
	
	if ($w_original < $w || $h_original < $h) {
		die("Imagen es muy pequeña");
	}
	
	if ($w_original > $h_original){
		// landscape
		$factor = $h / $h_original;
	}
	else {
		// portrait
		$factor = $w / $w_original;
	}
	
	$img = imagecreatefromjpeg($img);
	$img = imagescale($img, $w_original * $factor, $h_original * $factor);
	return $img;	
}
