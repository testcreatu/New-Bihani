@extends('cd-admin.admin-master')

@section('content')

<div class="col-md-12 ">
	<div class="portlet light bordered">
	    <div class="portlet-title">
	        <div class="caption">
	            <i class="icon-settings font-dark"></i>
	            <span class="caption-subject font-dark sbold uppercase">Add team</span>
	        </div>
	    </div>
	    <div class="portlet-body form">
	        <form class="form-horizontal" role="form" action="{{url('cd-admin/save-team-category')}}" method="post">
	        	@csrf
	            <div class="form-body">
	            	@if(Session::has('msg'))
						<p class="alert alert-danger">{{ Session::get('msg') }}</p>
					@endif
	                <div class="form-group">
	                    <label class="col-md-3 control-label">English Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_eng" class="form-control" placeholder="Enter English Name" value="{{old('name_eng')}}">
	                        <div style="color: red;">{{$errors->first('name_eng')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Nepali Name</label>
	                    <div class="col-md-6">
	                        <input type="text" name="name_nep" class="form-control" placeholder="Enter Nepali Name" value="{{old('name_nep')}}">
	                        <div style="color: red;">{{$errors->first('name_nep')}}</div>
	                    </div>
	                </div>

	                <div class="form-group">
	                    <label class="col-md-3 control-label">Priority</label>
	                    <div class="col-md-6">
	                        <input type="number" name="priority" class="form-control" placeholder="Enter Priority" value="{{old('priority')}}">
	                        <div style="color: red;">{{$errors->first('priority')}}</div>
	                    </div>
	                </div>




	            <div class="form-actions">
	                <div class="row">
	                    <div class="col-md-offset-3 col-md-9">
	                        <button type="submit" class="btn green">Submit</button>
	                        <button type="button" class="btn default"><a href="{{url('cd-admin/team-category')}}" style="text-decoration: none; color: white;">Cancel</a></button>
	                    </div>
	                </div>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection