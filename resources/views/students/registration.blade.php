@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registration Form</div>

                <div class="card-body">

                @if(session()->has('message'))
                     <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
                @endif

                 @if(session()->has('errors'))
                     <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
                @endif

                <form action="<?= url('savedetails') ?>" method="post" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <h2>Registation</h2>
                    <p>Please fill in this form for student registration!</p>
                    <hr>
                    <div class="form-group">
                        <label for="name"><b>Name</b></label>
                        <input type="text" class="form-control" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <label for="grade"><b>Grade</b></label><br>
                            <select name="grade">
                                <option value="BA">BA</option>
                                <option value="MA">MA</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="image"><b>Image</b></label>
                        <input type="file" class="form-control" name="image" required="required">
                    </div>
                   <div class="form-group">
                        <label for="dateofbirth"><b>Date of Birth</b></label>
                        <input type="date" class="form-control" name="dateofbirth" required="required">
                    </div>
                    <div class="form-group">
                        <label for="address"><b>Address</b></label>
                        <input type="text" class="form-control" name="address" required="required">
                    </div>
                    <div class="form-group">
                        <label for="city"><b>City</b></label>
                        <input type="text" class="form-control" name="city" required="required">
                    </div>
                    <div class="form-group">
                        <label for="country"><b>Country</b></label>
                        <input type="text" class="form-control" name="country" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" value="submit" class="btn btn-primary btn-lg">Save Details</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection