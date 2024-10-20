@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard Home</div>

                <div class="card-body">

                    You are logged in!

                    @hasanyrole('super-admin|admin')
                        <b-dropdown-item href="{{ route('admin.users.index') }}">User Management</b-dropdown-item>
                    @else
                        <div><p>Keep in touch!</p></div>
                    @endhasanyrole

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
