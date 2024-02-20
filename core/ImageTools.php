<?php

namespace Core;

class ImageTools {

    protected $imagePath;

    public function __construct($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function resize($width, $height)
    {
        list($srcWidth, $srcHeight) = getimagesize($this->imagePath);

        $srcResource = imagecreatefromjpeg($this->imagePath);
        $dstResource = imagecreatetruecolor($width, $height);

        imagecopyresampled($dstResource, $srcResource, 0, 0, 0, 0, $width, $height, $srcWidth, $srcHeight);

        $this->imagePath = basename($this->imagePath);
        imagejpeg($dstResource, $this->imagePath);

        imagedestroy($srcResource);
        imagedestroy($dstResource);

        return $this;
    }

    public function compress($quality)
    {

        $imageInfo = getimagesize($this->imagePath);
        $mimeType = $imageInfo['mime'];

        switch ($mimeType) {
            case 'image/jpeg':
                $image = imagecreatefromjpeg($this->imagePath);
                imagejpeg($image, $this->imagePath, $quality);
                break;
            case 'image/png':
                $image = imagecreatefrompng($this->imagePath);
                imagepng($image, $this->imagePath, 9 - round(($quality / 100) * 9));
                break;
            case 'image/gif':
                $image = imagecreatefromgif($this->imagePath);
                imagegif($image, $this->imagePath);
                break;
            default:
                throw new \Exception('Unsupported image type');
        }

        return $this;
        
    }

    public function save($destination)
    {
        copy($this->imagePath, $destination);
        return $this;
    }

}
