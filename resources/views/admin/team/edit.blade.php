<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Our Team tahrirlash</h4>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('team.update', $team->id) }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    @method('PUT')
                    {{-- uz --}}
                    <div class="row uz">
                        <div class="col-md-4 mb-25 my-5 uz">
                            <label for="title_uz" class="form-label">Name</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="name" value="{{ $team->name }}" placeholder="Name">
                        </div>
                        <div class="col-md-4 mb-25 my-5 uz">
                            <label for="title_uz" class="form-label">Lavozimi uz</label>
                            <input type="text" id="title_uz" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="job_uz" value="{{ $team->job_uz }}" placeholder="Lavozimi UZ">
                        </div>
                        <div class="col-md-4 mb-25 my-5 ru">
                            <label for="title_ru" class="form-label">Lavozimi ru</label>
                            <input type="text" id="title_ru" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="job_ru" value="{{ $team->job_ru }}" placeholder="Lavozimi RU">
                        </div>
                        <div class="col-md-4 mb-25 my-5 en">
                            <label for="title_en" class="form-label">Lavozimi en</label>
                            <input type="text" id="title_en" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="job_en" value="{{ $team->job_en }}" placeholder="Lavozimi EN">
                        </div>
                    </div>

                    {{-- description_uz --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_uz</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_uz" style="height: 300px;">
                                            {!! $team->description_uz !!}
                                        </div>
                                        <input type="hidden" name="description_uz" id="description_uz">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- description_ru --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_ru</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_ru" style="height: 300px;">
                                            {!! $team->description_ru !!}
                                        </div>
                                        <input type="hidden" name="description_ru" id="description_ru">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- description_en --}}
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_en</h4>
                                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>
                                        <div id="editor_en" style="height: 300px;">
                                            {!! $team->description_en !!}
                                        </div>
                                        <input type="hidden" name="description_en" id="description_en">
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                    </div>

                    {{-- umumiy --}}
                    <div class="row">
                        <div class="col-md-4 mb-25">
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image" placeholder="Rasmni kiriting">
                            @if ($team->image)
                                <img src="{{ asset('storage/' . $team->image) }}" alt="Image" class="img-fluid">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('team.index') }}" class="btn btn-default btn-squared btn-light px-20">Cancel</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Quill JS -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editorUz = new Quill('#editor_uz', {
            theme: 'snow'
        });
        var editorRu = new Quill('#editor_ru', {
            theme: 'snow'
        });
        var editorEn = new Quill('#editor_en', {
            theme: 'snow'
        });

        function updateEditorContent() {
            document.getElementById('description_uz').value = editorUz.root.innerHTML;
            document.getElementById('description_ru').value = editorRu.root.innerHTML;
            document.getElementById('description_en').value = editorEn.root.innerHTML;
        }
    </script>
</x-layouts.admin>
