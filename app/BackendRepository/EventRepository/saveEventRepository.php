<?php

namespace App\BackendRepository\EventRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveEventRepository extends Controller
{
	protected $saveImage = null;
    protected $deleteImage = null;
    protected $validation = null;
    protected $generateUuid = null;
    
    
    public function __construct(SaveImageRepository $saveImage, DeleteImageRepository $deleteImage, ValidationRepository $validation, GenerateUuidRepository $generateUuid)
    {
        $this->saveImage = $saveImage;
        $this->deleteImage = $deleteImage;
        $this->validation = $validation;
        $this->generateUuid = $generateUuid;

    }

    public function saveEvent($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateDate($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


		$event = new Event;
		$event->uuid = $this->generateUuid->generateUuid('events');
		$event->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$event->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
		$event->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $event->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $event->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $event->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $event->date = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['date']);
		$event->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);
        $event->image = $this->saveImage->saveImage($request);
        $event->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $event->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $event->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $event->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $event->save();
	}

	public function updateEvent($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDescriptionEng($request);
        $this->validation->validateDescriptionNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateDate($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);


		$event = Event::where('uuid',$request['uuid'])->get()->first();
		$event->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$event->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
		$event->description_eng = str_replace( array( '\'','&lt;'), '-',$request['description_eng']);
        $event->description_nep = str_replace( array( '\'','&lt;'), '-',$request['description_nep']);
        $event->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $event->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
		$event->date = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['date']);
        $event->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);
        
        if ($request->hasFile('image')) {
            $this->deleteImage->deleteImage($event);
            $event->image = $this->saveImage->saveImage($request);

        }
        $event->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $event->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $event->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $event->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $event->save();
	}

}