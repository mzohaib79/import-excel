<?php

namespace App\SoftpersHelpers;
use File;

class SoftpersHelperClass {



     /**
      * save File for all types
      */
      public function saveFile($file, $path)
      {
         $getImgPath =$this->checkFilePath($path);
         if(empty($file)) {
            $newImage = '';
         } else {
          $fileName = time().'.'.$file->clientExtension();
          $file->move($getImgPath, $fileName);
          $newImage = $fileName;
         }
         return $newImage;
      }

      /**
       * check File path . create directory if not exist
       */
     public function checkFilePath($filepath)
     {
         if(!File::isDirectory($filepath)){
            File::makeDirectory($filepath, 0777, true, true);
         }
         return $filepath;
     }
}
