@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 loginContainer">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>You are logged in!</p>
                    <p><a href="/sneakers/create">Insert</a></p>
                    <p><a href="/sneakers_admin">Board</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
