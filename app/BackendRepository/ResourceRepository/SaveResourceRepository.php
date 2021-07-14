<?php

namespace App\BackendRepository\ResourceRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Resource;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveResourceRepository extends Controller
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

    public function saveResource($request)
    {
    	$this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDesignationEng($request);
        $this->validation->validateDesignationNep($request);
        $this->validation->validateSkillEng($request);
        $this->validation->validateSkillNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        $resource = new Resource;
		$resource->uuid = $this->generateUuid->generateUuid('resources');
		$resource->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$resource->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $resource->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $resource->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
		$resource->designation_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['designation_eng']);
		$resource->designation_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['designation_nep']);
		$resource->skill_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['skill_eng']);
		$resource->skill_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['skill_nep']);

        $resource->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $resource->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        $resource->image = $this->saveImage->saveImage($request);
        $resource->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $resource->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $resource->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $resource->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $resource->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $resource->save();
    }

    public function updateResource($request)
    {
    	$this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateDesignationEng($request);
        $this->validation->validateDesignationNep($request);
        $this->validation->validateSkillEng($request);
        $this->validation->validateSkillNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        $resource = Resource::where('uuid', $request['uuid'])->get()->first();
		$resource->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$resource->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $resource->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $resource->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
		$resource->designation_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['designation_eng']);
		$resource->designation_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['designation_nep']);
		$resource->skill_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['skill_eng']);
		$resource->skill_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['skill_nep']);

        $resource->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $resource->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        if ($request->hasFile('image'))
        {
            $this->deleteImage->deleteImage($resource);
            $resource->image = $this->saveImage->saveImage($request);

        }
        $resource->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $resource->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $resource->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $resource->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $resource->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $resource->save();
    }

}