@extends('admin.layout.app')
@section('content')

<main id="main-container">

    <!-- Hero -->
    <div class="content">
        <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
            <div>
                <h1 class="h3 mb-1">
                    Dashboard
                </h1>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Overview -->
        <div class="row items-push">
            <div class="col-sm-6 col-xl-6">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-star fa-lg text-success"></i>
                        </div>
                        <div class="fs-1 fw-bold">3</div>
                        <div class="text-muted mb-3">Active Devices</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-6">
                <div class="block block-rounded text-center d-flex flex-column h-100 mb-0">
                    <div class="block-content block-content-full flex-grow-1">
                        <div class="item rounded-3 bg-body mx-auto my-3">
                            <i class="fa fa-power-off fa-lg text-danger"></i>
                        </div>
                        <div class="fs-1 fw-bold">5</div>
                        <div class="text-muted mb-3">InActive Devices</div>

                    </div>
                </div>
            </div>

        </div>
        <!-- END Overview -->

    </div>
    <!-- END Page Content -->
</main>

@endsection
