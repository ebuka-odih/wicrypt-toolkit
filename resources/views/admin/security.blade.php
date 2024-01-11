@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Update Password</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Full Table -->
            <div class="block block-rounded">

                <div class="block-content">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form class='m-5' action="{{ route('admin.updatePassword') }}" method="POST">
                            @csrf

                            <div class="form-row mb-3">
                                <label for="value">Current Password</label>
                                <input type="password" id="value" name="old_password" class="form-control">
                            </div>
                            <div class="form-row mb-3">
                                <label for="value">New Password</label>
                                <input type="password" id="value" name="new_password" class="form-control">
                            </div>
                            <div class="form-row mt-3 mb-3">
                                <label for="value">Confirm New Password</label>
                                <input type="password" id="value" name="new_password_confirmation" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-sm btn-primary" >Update Password</button>
                        </form>

                </div>
            </div>
            <!-- END Full Table -->

        </div>
        <!-- END Page Content -->
    </main>



@endsection
