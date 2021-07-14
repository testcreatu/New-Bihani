<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function editstatus($model_name, $uuid){
      $model ='App\\'.$model_name;
	  $status = $model::where('uuid', $uuid)->get()->first();
	  if ($status->status == '1') {
	    $status->status = '0';
	  }
	  else{
	    $status->status = '1';
	  }
	  $status->save();
	  return redirect()->back()->with('message','Status Changed Successfully');
	}
}
