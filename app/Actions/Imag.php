<?php  
namespace App\Actions;

use Intervention\Image\Facades\Image as Image;
use Auth;
use Illuminate\Support\Facades\Storage;

class Imag{
    public function url($path = null, $directory = 'pictures'){
        if($path != null){
            $dir = storage_path().'/app/public/'.$directory;
            if(!file_exists($dir)){
                mkdir($dir, 0777, true);
            }
            // Storage::put($path);
            $filename = date('y_m_d_h_i_s').'.jpg';
            $name_path = $dir . '/' . $filename;
            $name_path_small = $dir . '/s_' . $filename;
            $img = Image::make($path);
            $img->save($name_path);
            $img->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($name_path_small);
            return $filename;
        }else {
            return false;
        }
    }
}
