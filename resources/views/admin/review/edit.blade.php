<x-layouts.admin>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Mijozlar fikrini Tahrirlash</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Fikrlar</li>
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
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('review.update', $review->id)}}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <h2>Mijozning Ismi</h2>

                            <div class="mb-3">
                                <label for="name" class="form-label">To'liq ism</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $review->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Mijoz Qayerdan?</label>
                                <input type="text" class="form-control" id="name" name="from_country" value="{{ $review->form_country }}" required>
                            </div>

                            <h2 class="mt-5">Mijozlar fikri batafsil</h2>

                            <div class="mb-3">
                                <label for="text_uz" class="form-label">Mijozlar fikri haqida batafsil O'zbek tilida</label>
                                <textarea class="form-control" id="text_uz" name="text_uz" rows="5" required>{{ $review->text_uz }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text_ru" class="form-label">Mijozlar fikri haqida batafsil Rus tilida</label>
                                <textarea class="form-control" id="text_ru" name="text_ru" rows="5" required>{{ $review->text_ru }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text_en" class="form-label">Mijozlar fikri haqida batafsil Ingliz tilida</label>
                                <textarea class="form-control" id="text_en" name="text_en" rows="5" required>{{ $review->text_en }}</textarea>
                            </div>

                            <style>
                                .custom-file-input {
                                    display: none;
                                }

                                .custom-file-label {
                                    background-color: #f8f9fa;
                                    color: #495057;
                                    border: 1px solid #ced4da;
                                    border-radius: 0.25rem;
                                    padding: 0.375rem 0.75rem;
                                    cursor: pointer;
                                }

                                .preview-image {
                                    max-width: 90px;
                                    max-height: 90px;
                                    margin-top: 10px;
                                }

                                .delete-icon {
                                    display: none;
                                    cursor: pointer;
                                    color: red;
                                }
                            </style>

                            <div class="mb-3 border rounded border-secondary-subtle">
                                <label for="fileInput" class="custom-file-label" id="photoLabel">Rasm Tanlash</label>
                                <input id="fileInput" name="image" type="file" class="custom-file-input" onchange="displayFileName()">
                                <i class="delete-icon fas fa-times-circle" id="deleteIcon" onclick="deleteImage()"></i>
                            </div>

                            <div id="imagePreview" class="mb-3">
                                @if ($review->image)
                                <img src="/storage/{{ $review->image }}" class="preview-image" alt="">
                                @endif
                            </div>

                            <script>
                                document.getElementById('fileInput').addEventListener('change', function() {
                                    const file = this.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const preview = document.createElement('img');
                                            preview.classList.add('preview-image');
                                            preview.src = e.target.result;
                                            document.getElementById('imagePreview').innerHTML = '';
                                            document.getElementById('imagePreview').appendChild(preview);
                                            document.getElementById('deleteIcon').style.display = 'inline-block';
                                        };
                                        reader.readAsDataURL(file);
                                    } else {
                                        document.getElementById('imagePreview').innerHTML = '';
                                        document.getElementById('deleteIcon').style.display = 'none';
                                    }
                                });

                                function displayFileName() {
                                    const input = document.getElementById('fileInput');
                                    const label = document.getElementById('photoLabel');
                                    const fileName = input.files[0].name;
                                    label.textContent = fileName;
                                }

                                function deleteImage() {
                                    document.getElementById('imagePreview').innerHTML = '';
                                    document.getElementById('fileInput').value = '';
                                    document.getElementById('deleteIcon').style.display = 'none';
                                }
                            </script>

                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                                <a href="{{ route('review.index')}}" class="btn btn-danger" type="button">Bekor qilish</a>
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
    </div> <!-- container -->
</x-layouts.admin>
