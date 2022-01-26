@extends('layout.app')
@section('content')
    <div class="contener">

        <div class="container p-3 mb-2 bg-light text-dark" style="width: 500px">
            <form action="{{Route('update',$student->id)}}"  method="get">
                @csrf

                <div class="form-group">
                    <label for="email">name:</label>
                    <input type="text" class="form-control" value="{{$student->numper}}" name="numper">
                </div>
                <div class="form-group">
                    <label for="email">name:</label>
                    <input type="text" class="form-control" value="{{$student->name}}" name="name">
                </div>
                <div class="form-group">
                    <label for="email">name:</label>
                    <input type="text" class="form-control" value="{{$student->addres}}" name="addres">
                </div>
                <button type="submit" class="btn btn-primary " style="margin-top: 20px ; margin-left: 200px ;">Submit</button>
            </form>
        </div>

    </div>
@endsection
