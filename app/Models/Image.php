<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'file',
        'dimension',
        'user_id',
    ];

    public static function makeDirectory()
    {
        $subfolder = 'images/'.date('Y/m/d');
        Storage::makeDirectory($subfolder);
        return $subfolder;
    }
    public static function getDimension($image)
    {
        [$width, $height] = getimagesize(Storage::path($image));
        return $width . 'x' . $height;
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function fileUrl()
    {
        return Storage::url($this->file);
    }

    public function permalink()
    {
        return $this->slug ? route('images.show', $this->slug):'#';
    }
}
