<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Termwind\ValueObjects\setElement;

class Service extends Model
{

    use HasFactory;
    protected $fillable =[
        'service_title',
        'status',
        'service_image',
        'service_description'
        ];

    protected static $service,$image,$imageName,$imageDir,$imageUrl;

    public static function saveImg($request)
    {
        self::$image                = $request->file('service_image');
        self::$imageName            = 'biztrox_service_'.time().self::$image->getClientOriginalExtension();
        self::$imageDir             ='admin/assets/images/uploads/services/';

        self::$image->move(self::$imageDir,self::$imageName);

        self::$imageUrl             = self::$imageDir.self::$imageName;
        return self::$imageUrl;

    }

    public static function newService($request)
    {
        self::$service = new Service();

        self::$service->service_title           = $request->service_title;
        self::$service->status                  = $request->status;
        self::$service->service_image           = self::saveImg($request);
        self::$service->service_description     = $request->service_description;
        self::$service->save();

    }

    public static function updateService($request,$id)
    {
        self::$service = Service::find($id);

        self::$service->service_title           = $request->service_title;
        self::$service->status                  = $request->status;

        if($request->file('service_image'))
        {
            if(self::$service->service_image )
            {
                unlink(self::$service->service_image );
                self::$service->service_image           = self::saveImg($request);
            }
            else{
                self::$service->service_image           = self::saveImg($request);
            }
        }


        self::$service->service_description     = $request->service_description;
        self::$service->save();
    }
}
