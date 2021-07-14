<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TeamCategory;
use App\BackendRepository\TeamCategoryRepository\SaveTeamCategoryRepository;

class TeamCategoryController extends Controller
{
	protected $saveTeamCategory = null;

	public function __construct(SaveTeamCategoryRepository $saveTeamCategory)
	{
        $this->saveTeamCategory = $saveTeamCategory;
	}

    public function create()
    {
    	return view('cd-admin.TeamCategory.createTeamCategory');
    }

    public function save(Request $request)
    {
    	$this->saveTeamCategory->saveTeamCategory($request);
    	return redirect('cd-admin/team-category')->with('message', 'Team Category Added Successfully');
    }

    public function view()
    {
    	$teamCategory = TeamCategory::all();
    	return view('cd-admin.TeamCategory.teamCategory', compact('teamCategory'));
    }

    public function edit(Request $request, $slug)
    {
    	$teamCategory = TeamCategory::where('id', $request['token'])->get()->first();
    	return view('cd-admin.TeamCategory.editTeamCategory', compact('teamCategory'));
    }

    public function update(Request $request, $slug)
    {
    	$this->saveTeamCategory->updateTeamCategory($request);
    	return redirect('cd-admin/team-category')->with('message', 'Team Category Updated Successfully');
    }

    public function delete(Request $request, $slug)
    {
    	$teamCategory = TeamCategory::where('id', $request['token'])->get()->first();
    	$teamCategory->delete();
    	return redirect('cd-admin/team-category')->with('msg', 'Team Category Deleted Successfully');
    }
}
