<?php 
// les instuction à structures conditionnelle
	// 1.1
	$un_nombre = 2;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif.";
	}

    // 1.2 if esle
	$un_nombre = -2;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif.";
	}else{
		echo "le nombre $un_nombre est négatif ou nul.";
	}

    // 1.3 if elseif
	$un_nombre = 0;

	if($un_nombre > 0){
		echo "le nombre $un_nombre est positif.";
	}elseif($un_nombre < 0){
		echo "le nombre $un_nombre est négatif.";
	}else{
		echo "le nombre $un_nombre est nul.";
	}

