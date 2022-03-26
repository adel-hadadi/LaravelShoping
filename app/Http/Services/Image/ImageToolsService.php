<?php

namespace App\Http\Services\Image;


class ImageToolsService
{
    protected $image;
    protected $exclusiveDirectory;
    protected $imageDirectory;
    protected $imageName;
    protected $imageFormat;
    protected $finalImageDirectory;
    protected $finaImageName;

    public function setImage($image)
    {
        $this->image = $image;
    }
    public function getExclusiveDirectory()
    {
        return $this->exclusiveDirectory;
    }
    public function setExclusiveDirectory($exclusiveDirectory)
    {
        $this->exclusiveDirectory = trim($exclusiveDirectory, '/\\');
    }
    public function getImageDirectory()
    {
        return $this->imageDirectory;
    }
    public function setImageDirectory($imageDirectory)
    {
        $this->imageDirectory = trim($imageDirectory, '/\\');
    }
    public function getImageName()
    {
        return $this->imageName;
    }
    public function setImageName($imageName)
    {
        return $this->imageName = $imageName;
    }
    public function setCurrentImageName()
    {
        return !empty($this->image) ? $this->setImageName(pathinfo($this->image->getClientOriginalName(), PATHINFO_FILENAME)) : false;
    }
    public function getImageFormat()
    {
        return $this->imageFormat;
    }
    public function setImageFormat($imageFormat)
    {
        $this->imageFormat = $imageFormat;
    }
    public function getFinalImageDirectory()
    {
        return $this->finalImageDirectory;
    }
    public function setFinalImageDirectory($finalImageDirectory)
    {
        return $this->finalImageDirectory = $finalImageDirectory;
    }
    public function getFinalImageName()
    {
        return $this->finalImageName;
    }
    public function setFinalImageName($finalImageName)
    {
        return $this->finalImageName = $finalImageName;
    }

    public function checkDirectory($imageDirectory)
    {
        if (!file_exists($imageDirectory)) {
            mkdir(
                $imageDirectory,
                0777,
                true
            );
        }
    }
    public function getImageAddress()
    {
        return $this->finalImageDirectory . DIRECTORY_SEPARATOR . $this->finalImageName;
    }
    protected function provider()
    {
        //set propertise

        $this->getImageDirectory() ?? $this->setImageDirectory(date("Y") . DIRECTORY_SEPARATOR . date('m') . DIRECTORY_SEPARATOR . date('d'));
        $this->getImageName() ?? $this->setImageName(time());
        $this->getImageFormat() ?? $this->setImageFormat($this->image->extension());


        //set final image directory 
        $finalImageDirectory = empty($this->exclusiveDirectory) ? $this->getImageDirectory() : $this->exclusiveDirectory . DIRECTORY_SEPARATOR .  $this->getImageDirectory();
    
        $this->setFinalImageDirectory($finalImageDirectory);

        //set final image name
        $this->setFinalImageName($this->getImageName(). "." . $this->getImageFormat());

        //check and create final image directory
        $this->checkDirectory($this->getFinalImageDirectory());
    }
}
