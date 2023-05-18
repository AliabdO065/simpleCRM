@extends('layouts.layout')
@section('content')
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Striped Table
        </div>
        <div class="card-block">
            <table class="table table-striped" id="table_id">
                <thead>
                    <tr>

                        <th>id</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $i)
                    <tr>
                        <td>{{$i['id']}}</td>
                        <td>{{$i['name']}}</td>
                        <td>{{$i['email']}}</td>
                        <td><a class="btn btn-primary" href="{{ route('dashboard.users.edit',$i)}}">Update</a></td>
                        <td>
                            <form action="{{ route('dashboard.users.destroy', $i->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection