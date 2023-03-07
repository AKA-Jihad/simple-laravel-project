@extends('layout')


@section('content')
<h1>Userlist Page</h1>

    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                        
                            
                            @foreach ($user as $use)
                                <tr>
                                    <td>{{$use->id}}</td>
                                    <td>{{$use->name}}</td>
                                    <td>{{$use->email}}</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection