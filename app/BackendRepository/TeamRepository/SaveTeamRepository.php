<?php

namespace App\BackendRepository\TeamRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Support\Str;
use App\BackendRepository\ImageRepository\SaveImageRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\BackendRepository\ValidateRepository\ValidationRepository;
use App\BackendRepository\UuidRepository\GenerateUuidRepository;

class SaveTeamRepository extends Controller
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

    public function saveTeam($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateImage($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);
        
		$team = new Team;
		$team->uuid = $this->generateUuid->generateUuid('teams');
		$team->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$team->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $team->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $team->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $team->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $team->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        $team->image = $this->saveImage->saveImage($request);
        $team->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $team->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $team->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $team->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $team->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $team->save();
	}

	public function updateTeam($request)
	{

        $this->validation->validateNameEng($request);
        $this->validation->validateNameNep($request);
        $this->validation->validateAltImage($request);
        $this->validation->validateNumberEng($request);
        $this->validation->validateNumberNep($request);
        $this->validation->validateStatus($request);
        $this->validation->validateSeoTitle($request);
        $this->validation->validateSeoKeyword($request);
        $this->validation->validateSeoDescription($request);

        	
    	$team = Team::where('uuid',$request['uuid'])->get()->first();
		$team->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
		$team->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $team->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $team->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $team->number_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_eng']);
        $team->number_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['number_nep']);
        if ($request->hasFile('image'))
        {
            $this->deleteImage->deleteImage($team);
            $team->image = $this->saveImage->saveImage($request);

        }
        $team->alt_image = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['alt_image']);
        $team->status = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['status']);

        $team->seo_title = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_title']);
        $team->seo_keyword = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['seo_keyword']);
        $team->seo_description = str_replace( array( '\'','&lt;'), '-',$request['seo_description']);
        $team->save();
	}

}