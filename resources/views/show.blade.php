@extends('layout.app')
@section('content')

    <div class="table-responsive">
        <table class="table mb-0 table-lg">
            <thead>
            <tr>
                <th>id</th>
                <th>number</th>
                <th>NAME</th>
                <th>addres</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($student as $stud)
            <tr>
                <th>{{$stud->id}}</th>
                <th>{{$stud->numper}}</th>
                <th>{{$stud->name}}</th>
                <th>{{$stud->addres}}</th>
                <th>
                    <a class="btn btn-success" href="{{url('edit/student'. '/' . $stud->id)}}">تعديل</a>
                    <a class="btn btn-danger" href="{{url('delete/student' .'/' .$stud->id)}}">حذف</a>
                </th>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>









@endsection
