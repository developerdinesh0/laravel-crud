@extends('layouts.admin')
@section('title', 'Digital Payroll | Dashboard')
@section('content')
<div class="container">
    <div class="col-md-12">
        @if(Session::has('flash_message'))
        <div class="flash-alertmsg">
            <div class="alert alert-{{ (Session::get('status')) ? Session::get('status') : 'success' }} alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close flash_alertmsg_close" type="button"></button>
                {!!html_entity_decode( Session::get('flash_message') )!!}
            </div>
        </div>
        @endif
        <a href="{{url('/add-employee')}}" class="btn btn-primary">Add Employee</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($employees)
                    @foreach($employees as $employee)
                        <tr>
                            <th>{{$employee->first_name}}</th>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->email}}</td>
                            <td>
                                <a href="{{url('/update-employee/'.$employee->id)}}">
                                    Edit
                                </a>
                                <a href="{{url('/delete-employee/'.$employee->id)}}">
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection