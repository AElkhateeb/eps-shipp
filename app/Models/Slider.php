<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Brackets\Translatable\Traits\HasTranslations;
use Brackets\Media\HasMedia\ProcessMediaTrait;
use Brackets\Media\HasMedia\AutoProcessMediaTrait;
use Brackets\Media\HasMedia\HasMediaCollectionsTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
//use Brackets\Media\HasMedia\HasMediaThumbsTrait;


class Slider extends Model implements  HasMedia
{

    use ProcessMediaTrait;
    use AutoProcessMediaTrait;
    use HasMediaCollectionsTrait;
    // use HasMediaTrait;
    use HasTranslations;
    protected $table = "slider";
    protected $fillable = [
        'title',
        'text',
        'activated',
        'is_published',
        'link1',
        'link2',
   //     'media_url','as_img',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];
    // these attributes are translatable
    public $translatable = [
        'title',
        'text',

    ];

    protected $appends = [
        'resource_url',
      //  'media_url','as_img'
    ];
    protected $hidden=[
        'created_at',
        'updated_at',
        'media'
    ];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/sliders/'.$this->getKey());
    }
    public function registerMediaCollections(): void {
        $this->addMediaCollection('slider');
    }
    public function registerMediaConversions(Media $media = null): void
    {
        $this->autoRegisterThumb200();
    }
 //   public function getMediaUrlAttribute(){ $mediaItems = $this->getMedia('slider'); $publicUrl = $mediaItems[0]->getUrl(); return asset($publicUrl) ; }
 //   public function getAsImgAttribute(){  $mediaItems = $this->getMedia('slider');  $publicUrl = $mediaItems[0]->getUrl();  return '<img  style="width: 90px; height: 90px;" src="'.asset($publicUrl).'">' ;}
 //   public function getMediaColl(){ $mediaItems = $this->getMedia('slider'); $publicUrl = $mediaItems[0]->getUrl(); return $publicUrl ;}
    /*  public function registerMediaCollections(): void
     {
         $this->addMediaCollection('slider')
             ->disk('media') // Specify a disk where to store this collection
             //  ->private('slider') // Alias to setting default private disk
             ->maxNumberOfFiles(1) // Set the file count limit
             // ->maxFilesize(920*500) // Set the file size limit
             ->accepts('image/*'); // Set the accepted file types (in MIME type format)
         // ->canView('media.view') // Set the ability (Gate) which is required to view the medium (in most cases you would want to call private())
         // ->canUpload('media.upload') ;// Set the ability (Gate) which is required to upload & attach new files to the model
     }

     //public function registerMediaConversions(Media $media = null): void{$this->autoRegisterThumb200(); }


    public function  slide(){
         return $this ->  hasOne('App\Models\Medium','model_id','id')->where('model_type', 'App\Models\Slider');
     }*/
}
