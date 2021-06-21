@extends('layouts.admin')
@section('title', 'Digital Payroll | Dashboard')
@section('content')
<div class="container">
    <div class="col-md-12">
        <h4 class="mb-3">Billing address</h4>
        <form id="create_employee_form" method="post" action="{{url('/add-employee')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="form-label">First name</label>
                <input
					type="text"
					class="form-control required"
					name="first_name" value=""
					placeholder="" 
				/>
            </div>
            <div class="form-group">
                <label class="form-label">Last name</label>
                <input
					type="text"
					class="form-control required"
					name="last_name" value=""
					placeholder="" 
				/>
            </div>
            <div class="form-group">
                <label class="form-label">Email</label>
                <input
					type="email"
					class="form-control required"
					name="email" value=""
					placeholder="" 
				/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection