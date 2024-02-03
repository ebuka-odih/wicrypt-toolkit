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
                    <form action="{{ route('file-upload.store') }}" method="POST" enctype="multipart/form-data" >
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <!-- Basic Elements -->
                        <div class="row push">

                            <div class="col-lg-8 col-xl-5 overflow-hidden">
                                <div class="mb-4">
                                    <label class="form-label" for="example-file-input">File Input</label>
                                    <input class="form-control" name="file" type="file" id="example-file-input">
                                </div>
                            </div>
                            <div class="col-8">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>


                        <!-- END Basic Elements -->

                    </form>
                    <hr>
                    <br>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>File URL</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($file as $item)
                            <tr>
                                <td>{{ date('d-M-Y', strtotime($item->created_at)) }}</td>
                                <td><a target="_blank" href="{{ $item->url }}">{{ $item->url }}</a></td>
                                <td>
                                    <form method="POST" action="{!! route('file-upload.destroy', $item->id) !!}" accept-charset="UTF-8">
                                        <input name="_method" value="DELETE" type="hidden">
                                        {{ csrf_field() }}

                                        <div class="btn-group btn-group-xs pull-right" role="group">
                                            <button type="submit" class="btn btn-sm btn-alt-danger js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete" onclick="return confirm(&quot;Delete Item?&quot;)">
                                                <i class="fa fa-times"></i> Delete
                                            </button>

                                        </div>

                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>No File</td>
                            </tr>
                        @endforelse
                        </tbody>

                    </table>

                </div>
            </div>
            <!-- END Elements -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
