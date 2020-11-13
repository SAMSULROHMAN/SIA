@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        <div class="row">
            @include('component.menu')
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Customer
                        <div class="float-right">
                            <a href="{{ route('customer.create') }}" class="btn btn-sm btn-success">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @php
                            $no = 1;
                        @endphp
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $customer)
                                <tr>
                                    <td scope="row">{{ $no++ }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->phone }}</td>
                                    <td>{{ $customer->address }}</td>
                                    <td>
                                        <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                                        </a>
                                        <form action="{{ route('customer.destroy',$customer->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="delete" />
                                            {{ csrf_field() }}
                                            <input class="btn btn-sm btn-danger" type="submit" value="Delete" />
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $customers->links('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection