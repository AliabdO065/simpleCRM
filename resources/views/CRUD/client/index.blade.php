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
                        <th>name</th>
                        <th>phone</th>
                        <th>image</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all as $i)
                    <tr>
                        <td>{{$i['id']}}</td>
                        <td>{{$i['name']}}</td>
                        <td>{{$i['phone']}}</td>
                        <td>{{$i['image']}}</td>
                        <td><a class="btn btn-primary" href="{{ route('dashboard.clients.edit',$i)}}">Update</a></td>
                        <td>
                            <form action="{{ route('dashboard.clients.destroy', $i->id) }}" method="POST">
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