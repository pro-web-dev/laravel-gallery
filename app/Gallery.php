<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    protected $fillable = ['image'];
    protected $table = 'images';

    public static function add($fields)
    {
        return new static;
    }

    public function uploadImage($image)
    {
        if($image == null) return;
        $this->removeImage();
        $filename = $image->store('uploads');
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null){
            Storage::delete($this->image);
        }
    }

    public function getImage()
    {
        return $this->image ? $this->image : '/img/no-image.png';
    }

    public function remove()
    {
        $this->removeImage();
        $this->delete();
    }
}
