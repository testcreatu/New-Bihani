@extends('cd-admin.admin-master')

@section('content')

@if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
@if(Session::has('msg'))
<p class="alert alert-danger">{{ Session::get('msg') }}</p>
@endif

<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-settings font-dark"></i>
                    <span class="caption-subject bold uppercase"> About Us</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"><a href="{{url('cd-admin/create-about')}}" style="text-decoration: none; color: white;">Add New <i class="fa fa-plus"></i></a> 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                    <thead>
                        <tr>
                            <th>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                    <span></span>
                                </label>
                            </th>
                            <th> English Title </th>
                            <th> Nepali Title </th>
                            <th> Actions </th>
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($abouts as $about)
                        <tr class="odd gradeX">
                            <td>
                                <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" value="1" />
                                    <span></span>
                                </label>
                            </td>
                            <td> {{$about['title_eng']}} </td>
                            <td> {{$about['title_nep']}} </td>
                            <td>
                                    <button class="btn btn-xs green"><a href="{{url('cd-admin/edit-about/'.$about['id'])}}" style="color: white; text-decoration: none;"><i class="fa fa-edit"></i>Edit</a></button>&nbsp;&nbsp;

                                    <button class="btn btn-xs red"><a onclick="return confirm('Are you sure?')" href="{{url('cd-admin/delete-about/'.$about['id'])}}" style="color: white; text-decoration: none;"><i class="fa fa-trash"></i>Delete</a></button>
                                
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>

@endsection