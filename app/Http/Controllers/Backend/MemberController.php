<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Member;
use App\BackendRepository\MemberRepository\SaveMemberRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;


class MemberController extends Controller
{
	protected $saveMember = null;
	protected $deleteImage = null;

	public function __construct(SaveMemberRepository $saveMember, DeleteImageRepository $deleteImage)
	{
		$this->saveMember = $saveMember;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.Member.createMember');
    }

    public function save(Request $request)
    {
    	$this->saveMember->saveMember($request);
    	return redirect('cd-admin/member')->with('message','Member Added Successfully');
    }

    public function view()
    {
    	$finalResponse = [];
        $members = Member::all();
        $model = 'Member';
        $finalResponse['members']=$members;
        $finalResponse['model']=$model;
    	return view('cd-admin.Member.member', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$member = Member::where('uuid',$request['token'])->get()->first();
    	return view('cd-admin.Member.editMember', compact('member'));
    }

    public function update(Request $request, $slug)
    {
    	$this->saveMember->updateMember($request);
    	return redirect('cd-admin/member')->with('message','Member Updated Successfully');
    }

    public function delete(Request $request)
    {
        $member = Member::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($member);
        $member->delete();
        return redirect('cd-admin/member')->with('msg','Member Deleted Successfully');
    }

}
