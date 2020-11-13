@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row">
        @include('component.menu')
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p class="card-text">
                        You are logged in!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
