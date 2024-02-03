@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">All Devices</h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Full Table -->
        <div class="block block-rounded">

            <div class="block-content">
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Device ID</th>
                            <th>WiFi Name</th>
                            <th>Online Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($appData as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->device_id }}</td>
                                <td>{{ $data->wifi_name }}</td>
                                <td>{{ $data->online_status ? 'Online' : 'Offline' }}</td>
                                <td>{{ $data->created_at }}</td>
                                <td>{{ $data->updated_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- END Full Table -->

    </div>
    <!-- END Page Content -->
</main>


@endsection
