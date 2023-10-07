<?php
class Image {
   public function create_image():void
   {
       $image = imagecreatetruecolor(400, 200);

       $bgColor = imagecolorallocate($image, 255, 255, 255);
       imagefill($image, 0, 0, $bgColor);

       header('Content-Type: image/png');

       imagepng($image);
       imagedestroy($image);
   }
}
