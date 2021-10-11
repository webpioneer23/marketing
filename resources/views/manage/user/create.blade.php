@extends('layouts.master')
@section('title') Create User @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Home @endslot
        @slot('title') Create User @endslot
    @endcomponent

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <form class="custom-validation" action="{{route('all-users.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Name" value="{{old('name')}}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" id="username" name="username"
                                        placeholder="User Name" value="{{old('username')}}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">E-Mail</label>
                                    <div>
                                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required
                                            parsley-type="email" placeholder="Enter a valid e-mail"
                                            value="{{old('email')}}" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Select Role</label>
                                <select class="form-control" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="manager">manager</option>
                                    <option value="emp">Employee</option>
                                    <option value="client">Client</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Password</label>
                                <div>
                                    <input type="password" id="password" name="password" class="form-control" required
                                        placeholder="New Password" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label>Confirm Password</label>
                                <div>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" required data-parsley-equalto="#password"
                                        placeholder="Re-Type Password" />
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary mt-2" type="submit">Submit</button>
                        <button class="btn btn-primary mt-2" type="button" id="show-pass">Show Password</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- parsleyjs -->
    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>
@endsection
