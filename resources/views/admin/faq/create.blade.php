<x-layouts.admin>
    <!-- Start Content-->
    <div class="container-fluid">

        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Tez-tez so'raladigan savollar</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Yangiliklar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                    <form action="{{ route('faq.store')}}" method="post" class="needs-validation dropzone" enctype="multipart/form-data" novalidate id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews" data-upload-preview-template="#uploadPreviewTemplate">
                            @csrf
                            <h2>Title</h2>

                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Mavzu O'zbek tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title_uz" placeholder="Title Uz" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Mavzu Rus tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title_ru" placeholder="Title Ru" required>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Mavzu Ingliz tilida</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title_en" placeholder="Title En" required>
                            </div>


                            <h2 class="mt-5">Javoblar</h2>

                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Javoblar O'zbek tilida</label>
                                <textarea name="text_uz">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Javoblar Rus tilida</label>
                                <textarea name="text_ru">
                                </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="validationCustom01" class="form-label">Javoblar Ingliz tilida</label>
                                <textarea name="text_en">
                                </textarea>
                            </div>
                        




                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                                <a href="{{ route('faq.index')}}" class="btn btn-danger" type="submit">O'chirish</a>
                            </div>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

        </div>

    </div> <!-- container -->
</x-layouts.admin>