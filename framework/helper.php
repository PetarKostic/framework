<?php 

   function view($str, $data = [])
   {
	extract($data);
	return require("views/$str.view.php");
   }

   function dateTimeToString($datetime)
   {
        $string = $datetime->format('Y-m-d\TH:i:s.uO');
        return $string ? $string : 'Invalid DateTimeInterface object';
   }

 ?>
