@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Edit team</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/update-team/'.$team['slug_eng'].'?token='.$team['uuid'])}}" method="post" enctype="multipart/form-data">
	        	@csrf
	            <div class="form-body">
	            	@if(Session::has('msg'))
						<p class="alert alert-danger">{{ Session::get('msg') }}</p>
					@endif
					<div class="form-group">
	                    <label class="col-md-3 control-label">Team Category</label>
	                    <div class="col-md-6">
	                        <select class="form-control" name="team_cat">
	                        	@foreach($teamCategory as $teamCat)
	                        	<option value="{{$teamCat['id']}}" <?php if ($teamCat['id']==$team['team_category_id']) {
	                        		echo "selected";
	                        	} ?>>{{$teamCat['name_eng']}}</option>
	                        	@endforeach
	                        </select>
	                        <div style="color: red;">{{$errors->first('team_cat')}}</div>
	                    </div>
	                </div>
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_eng" class="form-control" placeholder="Enter English Name" value="{{$team['name_eng']}}">
	                        <div style="color: red;">{{$errors->first('name_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_nep" class="form-control" placeholder="Enter Nepali Name" value="{{$team['name_nep']}}">
	                        <div style="color: red;">{{$errors->first('name_nep')}}</div>
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
	                        <input type="text" name="alt_image" class="form-control" placeholder="Enter image name" value="{{$team['alt_image']}}">
	                        <div style="color: red;">{{$errors->first('alt_image')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_eng" class="form-control" value="{{$team['number_eng']}}">
	                        <div style="color: red;">{{$errors->first('number_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Number</label>
	                    <div class="col-md-6">
	                        <input type="number" name="number_nep" class="form-control" value="{{$team['number_nep']}}">
	                        <div style="color: red;">{{$errors->first('number_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Status</label>
	                    <div class="col-md-6">
	                		<input type="radio" id="male" name="status" value="1" <?php if ($team['status'] == '1') {echo "checked";} ?>>Active
	                		<input type="radio" id="male" name="status" value="0" <?php if ($team['status'] == '0') {echo "checked";} ?>>Inactive
	                        <div style="color: red;">{{$errors->first('status')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Title</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_title" class="form-control" placeholder="Enter SEO Title" value="{{$team['seo_title']}}">
	                        <div style="color: red;">{{$errors->first('seo_title')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Seo Keyword</label>
	                    <div class="col-md-6">
	                        <input type="text" name="seo_keyword" class="form-control" placeholder="Enter SEO keyword" value="{{$team['seo_keyword']}}">
	                        <div style="color: red;">{{$errors->first('seo_keyword')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">SEO Description</label>
	                    <div class="col-md-6">
	                        <textarea name="seo_description" class="form-control" placeholder="Enter SEO Description">{{$team['seo_description']}}</textarea>
	                        <div style="color: red;">{{$errors->first('seo_description')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <div class="col-md-6">
	                        <input type="hidden" name="uuid" class="form-control" value="{{$team['uuid']}}">
	                    </div>
	                </div>
	            </div>


	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/team')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection