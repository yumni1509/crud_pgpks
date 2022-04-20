@extends('dashboard.layouts.main')

@section('content')

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="update ml-auto mr-auto float-right">
                        <a class="btn btn-default btn-round btn-tooltip" href="{{ route('registermps.create') }}">Register</a>
                    </div>
                    <h4 class="card-title"> List of Auth Partner Company</h4>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>  
                @endif

                <div class="card-body">
                    <div class="table">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>CompanyName</th>
                                <th class="text-right">Action</th>
                            </thead>
                            @foreach ($registermps as $registermp)
                            <tr>
                                <td>{{ $registermp->id }}</td>
                                <td>{{ $registermp->companyname }}</td>
                                <td>
                                    <form action="{{ route('registermps.destroy', $registermp->id) }}" method="POST">
                                        <a class="btn btn-info" href="{{ route('registermps.show',$registermp->id) }}">Show</a>
                                        <a class="btn btn-primary" href="{{ route('registermps.edit', $registermp->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            @endforeach

                        </table>
                        {{ $registermps->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection