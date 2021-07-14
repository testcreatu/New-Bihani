<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BackendRepository\ImportantNumberRepository\SaveImportantNumberRepository;
use App\BackendRepository\ImageRepository\DeleteImageRepository;
use App\ImportantNumber;

class ImportantNumberController extends Controller
{

	protected $saveImportantNumber = null;
	protected $deleteImage = null;

	public function __construct(saveImportantNumberRepository $saveImportantNumber, DeleteImageRepository $deleteImage)
	{
		$this->saveImportantNumber = $saveImportantNumber;
		$this->deleteImage = $deleteImage;
	}

    public function create()
    {
    	return view('cd-admin.ImportantNumber.createImportantNumber');
    }

    public function save(Request $request)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveImportantNumber->saveImportantNumber($request);
    		return redirect('cd-admin/number')->with('message','Important Number Added Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    	
    }

    public function view()
    {
    	$finalResponse = [];
        $numbers = ImportantNumber::all();
        $model = 'ImportantNumber';
        $finalResponse['numbers']=$numbers;
        $finalResponse['model']=$model;
    	return view('cd-admin.ImportantNumber.importantNumber', compact('finalResponse'));
    }

    public function edit(Request $request, $slug)
    {
    	$number = ImportantNumber::where('uuid', $request['token'])->get()->first();
    	return view('cd-admin.ImportantNumber.editImportantNumber', compact('number'));
    }

    public function update(Request $request, $slug)
    {
    	if (strlen($request['number_eng'])==10 and strlen($request['number_nep'])==10) 
    	{
    		$this->saveImportantNumber->updateImportantNumber($request);
    		return redirect('cd-admin/number')->with('message','Important Number Updated Successfully');
    	}
    	else
    	{
    		return redirect()->back()->with('msg','Invalid number');
    	}
    	
    }

    public function delete(Request $request)
    {
        $number = ImportantNumber::where('uuid', $request['token'])->get()->first();
        $this->deleteImage->deleteImage($number);
        $number->delete();
        return redirect('cd-admin/number')->with('msg','Important Number Deleted Successfully');
    }


}
