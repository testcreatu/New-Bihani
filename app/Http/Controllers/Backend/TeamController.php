<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\TeamRepository\SaveTeamRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\Team;
use App\TeamCategory;

class TeamController extends Controller
{
    protected $saveTeam = null;
	protected $deleteImage = null;

	public function __construct(saveTeamRepository $saveTeam, DeleteImageRepository $deleteImage)
	{
		$this->saveTeam = $saveTeam;
		$this->deleteImage = $deleteImage;
	}

	public function create()
    {
        $teamCategory = TeamCategory::all();
    	return view('cd-admin.Team.createTeam', compact('teamCategory'));
    }

    public function save(Request $request)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveTeam->saveTeam($request);
    		return redirect('cd-admin/team')->with('message','Team Added Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    	
    }

    public function view()
    {
    	$finalResponse = [];
        $teams = Team::all();
        $model = 'Team';
        $finalResponse['teams']=$teams;
        $finalResponse['model']=$model;
    	return view('cd-admin.Team.team', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$team = Team::where('uuid', $request['token'])->get()->first();
        $teamCategory = TeamCategory::all();
    	return view('cd-admin.Team.editTeam', compact('team', 'teamCategory'));
    }

    public function update(Request $request, $slug)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveTeam->updateTeam($request);
    		return redirect('cd-admin/team')->with('message','Team Updated Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    	
    }

    public function delete(Request $request)
    {
        $team = Team::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($team);
        $team->delete();
        return redirect('cd-admin/team')->with('msg','Team Deleted Successfully');
    }


}
