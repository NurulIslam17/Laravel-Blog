<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlodSubCategory extends Model
{
    use HasFactory;

    protected $fillable = ['sub_category_id','sub_category_name','status'];

    public static function saveOrUpdate($request , $id=null)
    {
        BlodSubCategory::UpdateOrCreate(['id' => $id],$request->except('_token'));
    }
}
