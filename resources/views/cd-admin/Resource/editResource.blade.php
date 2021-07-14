@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit resource</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/update-resource/'.$resource['slug_eng'].'?token='.$resource['uuid'])}}" method="post" enctype="multipart/form-data">
	        	@csrf
	            <div class="form-body">
	            	@if(Session::has('msg'))
						<p class="alert alert-danger">{{ Session::get('msg') }}</p>
					@endif
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_eng" class="form-control" placeholder="Enter English Name" value="{{$resource['name_eng']}}">
	                        <div style="color: red;">{{$errors->first('name_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_nep" class="form-control" placeholder="Enter Nepali Name" value="{{$resource['name_nep']}}">
	                        <div style="color: red;">{{$errors->first('name_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Designation</label>
	                    <div class="col-md-6">
	                        <input type="text" name="designation_eng" class="form-control" placeholder="Enter Nepali Name" value="{{$resource['designation_eng']}}">
	                        <div style="color: red;">{{$errors->first('designation_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Designation</label>
	                    <div class="col-md-6">
	                        <input type="text" name="designation_nep" class="form-control" placeholder="Enter Nepali Name" value="{{$resource['designation_nep']}}">
	                        <div style="color: red;">{{$errors->first('designation_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Skill</label>
	                    <div class="col-md-6">
	                        <input type="text" name="skill_eng" class="form-control" value="<?php echo str_replace(" ", ",", $resource['skill_eng']) ?>" data-role="tagsinput">
	                        <div style="color: red;">{{$errors->first('skill_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Skill</label>
	                    <div class="col-md-6">
	                        <input type="text" name="skill_nep" class="form-control" value="<?php echo str_replace(" ", ",", $resource['skill_nep']) ?>" data-role="tagsinput">
	                        <div style="color: red;">{{$errors->first('skill_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Image</label>
	                    <div class="col-md-6">
	                        <input type="file" name="image" class="form-control">
	                        <div style="color: red;">{{$errors->first('image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Image_name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="alt_image" class="form-control" placeholder="Enter image name" value="{{$resource['alt_image']}}">
	                        <div style="color: red;">{{$errors->first('alt_image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_eng" class="form-control" value="{{$resource['number_eng']}}">
	                        <div style="color: red;">{{$errors->first('number_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_nep" class="form-control" value="{{$resource['number_nep']}}">
	                        <div style="color: red;">{{$errors->first('number_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Status</label>
	                    <div class="col-md-6">
	                		<input type="radio" id="male" name="status" value="1" <?php if ($resource['status'] == '1') {echo "checked";} ?>>Active
	                		<input type="radio" id="male" name="status" value="0" <?php if ($resource['status'] == '0') {echo "checked";} ?>>Inactive
	                        <div style="color: red;">{{$errors->first('status')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$resource['seo_title']}}">
	                        <div style="color: red;">{{$errors->first('seo_title')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Keyword</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_keyword" class="form-control" placeholder="Enter SEO keyword" value="{{$resource['seo_keyword']}}">
	                        <div style="color: red;">{{$errors->first('seo_keyword')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">SEO Description</label>
	                    <div class="col-md-6">
	                        <textarea name="seo_description" class="form-control" placeholder="Enter SEO Description">{{$resource['seo_description']}}</textarea>
	                        <div style="color: red;">{{$errors->first('seo_description')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-6">
	                        <input type="hidden" name="uuid" class="form-control" value="{{$resource['uuid']}}">
	                    </div>
	                </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/resource')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection