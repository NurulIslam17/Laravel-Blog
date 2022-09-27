<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Artical extends Model
{
    use HasFactory;

    protected $fillable=[
        'artical_title',
        'status',
        'blog_description',
        'slug',
        'poster_id',
        'artical_image',
    ];

    private static $artical,$image,$imageName,$imageDir,$imageUrl;

    public  static function saveImage($request)
    {
        self::$image = $request->file('artical_image');
        self::$imageName = 'biztrox_articale'.time().'.'.self::$image->getClientOriginalExtension();
        self::$imageDir = 'admin/assets/images/uploads/artical/';
        self::$image->move(self::$imageDir,self::$imageName);
        self::$imageUrl = self::$imageDir.self::$imageName;
        return self::$imageUrl;
    }


    public static function createArical($request)
    {
        self::$artical = new Artical();

        self::$artical->artical_title               = $request->artical_title;
        self::$artical->status                      = $request->status;
        self::$artical->blog_description            = $request->blog_description;
        self::$artical->slug                        = str_replace(' ','-',$request->artical_title.'.com');
        self::$artical->poster_id                   = Auth::id();
        self::$artical->artical_image               = self::saveImage($request);

        self::$artical->save();

    }

    public static function updateArical($request,$id)
    {
        self::$artical = Artical::find($id);

        self::$artical->artical_title               = $request->artical_title;
        self::$artical->status                      = $request->status;
        self::$artical->blog_description            = $request->blog_description;
        self::$artical->slug                        = str_replace(' ','-',$request->artical_title.'.com');
        self::$artical->poster_id                   = Auth::id();

        if($request->file('artical_image'))
        {
            if(self::$artical->artical_image)
            {
                unlink(self::$artical->artical_image);
                self::$artical->artical_image       = self::saveImage($request);
            }
            else{
                self::$artical->artical_image       = self::saveImage($request);
            }

        }
        self::$artical->save();
    }


}
