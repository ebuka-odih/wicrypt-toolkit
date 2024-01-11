@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">File Upload</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <!-- Elements -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Upload your file</h3>
                </div>
                <div class="block-content">
                    <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                        <!-- Basic Elements -->
                        <div class="row push">

                            <div class="col-lg-8 col-xl-5 overflow-hidden">
                                <div class="mb-4">
                                    <label class="form-label" for="example-file-input">File Input</label>
                                    <input class="form-control" type="file" id="example-file-input">
                                </div>
                            </div>
                        </div>

                        <!-- END Basic Elements -->

                    </form>
                    <hr>
                </div>
            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
