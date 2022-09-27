<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public $fillable = ['blog_category_id','sub_category_id','blog_title','poster_id','status','slug','blog_description','blog_image'];
    private static $blog,$image,$imageName,$imageDir,$imageUrl;

    public static function saveImage($request, $existImage=null)
    {
            self::$image= $request->file('blog_image');
            if(self::$image)
            {
                if($existImage)
                {
                    if(file_exists($existImage))
                    {
                        unlink($existImage);
                    }
                }
                self::$imageName    = 'biztrox_'.time().'.'.self::$image->getClientOriginalExtension();
                self::$imageDir     = 'admin/assets/images/uploads/';
                self::$image->move(self::$imageDir, self::$imageName);
                self::$imageUrl     =(self::$imageDir.self::$imageName);
            }
            else
            {
                self::$imageUrl->$existImage;
            }
            return self::$imageUrl;
    }

    public static function creteBlog($request)
    {
        self::$blog    = new Blog();

        self::$blog->blog_category_id                   = $request->blog_category_id;
        self::$blog->sub_category_id                    = $request->sub_category_id;
        self::$blog->blog_title                         = $request->blog_title;
        self::$blog->poster_id                          = auth()->id();
        self::$blog->status                             = $request->status;
        self::$blog->slug                               = str_replace(' ','-',$request->blog_title.'.com');
        self::$blog->blog_description                   = $request->blog_description;
        self::$blog->blog_image                         = self::saveImage($request);

        self::$blog->save();

    }
}
