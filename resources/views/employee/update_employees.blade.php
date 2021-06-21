@extends('layouts.admin')
@section('title', 'Digital Payroll | Dashboard')
@section('content')
<div class="container">
    <div class="col-md-12">
        <h4 class="mb-3">Billing address</h4>
        <form id="create_employee_form" method="post" action="{{url('/update-employee')}}">
            {{ csrf_field() }}
            <input type="hidden" name="employee_id" value="{{$employee->id}}">            
            <div class="form-group">
                <label class="form-label">First name</label>
                <input
					type="text"
					class="form-control required"
					name="first_name" value="{{$employee->first_name}}"
					placeholder="" 
				/>
            </div>
            <div class="form-group">
                <label class="form-label">Last name</label>
                <input
					type="text"
					class="form-control required"
					name="last_name" value="{{$employee->last_name}}"
					placeholder="" 
				/>
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input
					type="email"
					class="form-control required"
					name="email" value="{{$employee->email}}"
					placeholder="" 
				/>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection