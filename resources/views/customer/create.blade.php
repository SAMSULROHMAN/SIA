@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="row">
            @include('component.menu')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('customer.index') }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                        </a>

                        <div class="float-right">
                            Tambah Data Customer
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection