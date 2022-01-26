@extends('layout.app')
@section('content')

<div class="contener">
    <form class="form form-horizontal" action="{{url('store/studen')}}" method="get">
        @csrf
        <div class="form-body">
            <div class="row">
                <div class="col-md-4">
                    <label>numper</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="number" id="first-name" class="form-control" name="numper" placeholder="numper">
                </div>
                <div class="col-md-4">
                    <label>First Name</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="email-id" class="form-control" name="name" placeholder="First Name">
                </div>
                <div class="col-md-4">
                    <label>addres</label>
                </div>
                <div class="col-md-8 form-group">
                    <input type="text" id="contact-info" class="form-control" name="addres" placeholder="addres">
                </div>

                <div class="col-sm-12 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                </div>
            </div>
        </div>
    </form>

</div>

@endsection
