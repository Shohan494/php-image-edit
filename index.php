<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(array('driver' => 'imagick'));

// and you are ready to go ...
//capturing the image
$image = Image::make('image/img.jpg');
$edited = Image::make('image/img.jpg');


//edited the image
$edited->resize(800, 650);
//$edited->rotate(-45);
$image->insert($edited, 'center');

//saved the image
$image->save('edited/img.jpg');
echo $image->response();

?>
