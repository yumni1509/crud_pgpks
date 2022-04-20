@extends('dashboard.layouts.main')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Company Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('registermps.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Company Name</th>
            <td>{{ $registermp->companyname }}</td>
        </tr>
        <tr>
            <th>Company Address</th>
            <td>{{ $registermp->companyaddr }}</td>
        </tr>
        <tr>
            <th>Postcode </th>
            <td>{{ $registermp->postcode }}</td>
        </tr>
        <tr>
            <th>City </th>
            <td>{{ $registermp->city }}</td>
        </tr>
        <tr>
            <th>State </th>
            <td>{{ $registermp->state }}</td>
        </tr>
        <tr>
            <th>Country</th>
            <td>{{ $registermp->country }}</td>
        </tr>
        <tr>
            <th>Contact Person </th>
            <td>{{ $registermp->contactperson }}</td>
        </tr>
        <tr>
            <th>Mobile Phone</th>
            <td>{{ $registermp->phoneno }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $registermp->email }}</td>
        </tr>
        
    </table>

@endsection