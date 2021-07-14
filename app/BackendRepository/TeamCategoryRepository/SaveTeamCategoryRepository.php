<?php

namespace App\BackendRepository\TeamCategoryRepository;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeamCategory;
use Illuminate\Support\Str;
use App\BackendRepository\ValidateRepository\ValidationRepository;

class SaveTeamCategoryRepository extends Controller
{
	protected $validation = null;

	public function __construct(ValidationRepository $validation)
    {
        $this->validation = $validation;
    }

    public function saveTeamCategory($request)
    {
    	$this->validation->validateNameEng($request);
    	$this->validation->validatePriority($request);

    	$teamCategory = new TeamCategory;
    	$teamCategory->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
    	$teamCategory->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
    	$teamCategory->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $teamCategory->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $teamCategory->priority = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['priority']);
        $teamCategory->save();

    }

    public function updateTeamCategory($request)
    {
        $this->validation->validateNameEng($request);
        $this->validation->validateUpdatePriority($request);

        $teamCategory = TeamCategory::where('id', $request['id'])->get()->first();
        $teamCategory->name_eng = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']);
        $teamCategory->name_nep = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']);
        $teamCategory->slug_eng = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_eng']));
        $teamCategory->slug_nep = Str::slug(str_replace( array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['name_nep']));
        $teamCategory->priority = str_replace(array( '\'', '"', ',' , ';', '<', '>', '!','?','&lt;' ), ' ',$request['priority']);
        $teamCategory->save();
    }
}