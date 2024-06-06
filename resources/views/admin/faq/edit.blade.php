<x-layouts.admin>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Tez-tez so'raladigan savollarni Tahrirlash</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Xizmatlar</li>
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
                        <form action="{{ route('faq.update', $faq->id)}}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                            @csrf
                            @method('PUT')
                            <h2>Mavzu</h2>

                            <div class="mb-3">
                                <label for="title_uz" class="form-label">Mavzu O'zbek tilida</label>
                                <input type="text" class="form-control" id="title_uz" name="title_uz" value="{{ $faq->title_uz }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="title_ru" class="form-label">Mavzu Rus tilida</label>
                                <input type="text" class="form-control" id="title_ru" name="title_ru" value="{{ $faq->title_ru }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="title_en" class="form-label">Mavzu Ingliz tilida</label>
                                <input type="text" class="form-control" id="title_en" name="title_en" value="{{ $faq->title_en }}" required>
                            </div>

                            <h2 class="mt-5">Javoblar</h2>

                            <div class="mb-3">
                                <label for="text_uz" class="form-label">Biz haqimizda batafsil O'zbek tilida</label>
                                <textarea class="form-control" id="text_uz" name="text_uz" rows="5" required>{{ $faq->text_uz }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text_ru" class="form-label">Biz haqimizda batafsil Rus tilida</label>
                                <textarea class="form-control" id="text_ru" name="text_ru" rows="5" required>{{ $faq->text_ru }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="text_en" class="form-label">Biz haqimizda batafsil Ingliz tilida</label>
                                <textarea class="form-control" id="text_en" name="text_en" rows="5" required>{{ $faq->text_en }}</textarea>
                            </div>

                            
                            <div class="mt-3">
                                <button class="btn btn-primary me-4" type="submit">Saqlash</button>
                                <a href="{{ route('faq.index')}}" class="btn btn-danger" type="button">Bekor qilish</a>
                            </div>
                        </form>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
    </div> <!-- container -->
</x-layouts.admin>
