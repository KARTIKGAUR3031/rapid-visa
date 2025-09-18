@extends('layouts.dashboard')

@section('content')
<div class="header">
    <div class="header-left">
        <h1 class="page-title">My Documents</h1>
    </div>
</div>

<div class="content-area">
    <div class="row">
        <div class="col-lg-5">
            <div class="card modern">
                <div class="card-header">
                    <h3 class="card-title">Upload New Document</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashboard.documents.upload') }}" class="dropzone" id="my-awesome-dropzone">
                        @csrf
                        <div class="dz-message needsclick">
                            <i class="fas fa-cloud-upload-alt"></i>
                            <p>Drop files here or click to upload.</p>
                        </div>
                    </form>
                    <div class="text-center mt-3">
                        <button type="button" id="upload-button" class="btn btn-primary modern">Upload Files</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card modern">
                <div class="card-header">
                    <h3 class="card-title">Uploaded Documents</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="invoice-table modern">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Size</th>
                                    <th>Date Uploaded</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Document items will be dynamically added here -->
                                 <tr>
                                    <td colspan="4">
                                        <div class="empty-state">
                                            <i class="fas fa-folder-open"></i>
                                            <p>No documents uploaded yet.</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
    .dropzone {
        border: 2px dashed var(--border-color);
        border-radius: 12px;
        background: var(--main-bg);
        padding: 20px;
        transition: all 0.3s ease;
    }
    .dropzone:hover {
        border-color: var(--primary-color);
    }
    .dropzone .dz-message {
        text-align: center;
        color: var(--text-color-light);
    }
    .dropzone .dz-message i {
        font-size: 48px;
        color: var(--primary-color);
        margin-bottom: 15px;
    }
    .dropzone .dz-message p {
        font-size: 16px;
        margin: 0 0 5px 0;
    }
     .dropzone .dz-message .note {
        font-size: 12px;
    }
</style>
@endpush

@push('scripts')
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("#my-awesome-dropzone", {
        autoProcessQueue: false,
        paramName: "document",
        maxFilesize: 2, // MB
        // more options here
    });

    document.getElementById("upload-button").addEventListener("click", function() {
        myDropzone.processQueue();
    });

    myDropzone.on("success", function(file, response) {
        // Handle success
        console.log(response);
    });
</script>
@endpush