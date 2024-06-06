<x-layouts.admin>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Biz haqimizda: {{ $news->title_uz }}</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('news.index') }}">Bosh sahifa</a></li>
                            <li class="breadcrumb-item active">Xizmatlar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Title in different languages -->
                        <h2 class="mb-3">Title</h2>
                        <p><strong>O'zbek tilida:</strong> {{ $news->title_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $news->title_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $news->title_en }}</p>

                        <!-- Content in different languages -->
                        <h2 class="mt-5 mb-3">Biz haqimizda batafsil</h2>
                        <div class="mb-3">
                            <h4>O'zbek tilida</h4>
                            <p>{{ $news->content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Rus tilida</h4>
                            <p>{{ $news->content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Ingliz tilida</h4>
                            <p>{{ $news->content_en }}</p>
                        </div>

                        <!-- Image display -->
                        @if ($news->image)
                        <div class="mb-3">
                            <h4>Rasm</h4>
                            <img src="{{ asset('storage/' . $news->image) }}" class="img-fluid" alt="news Image">
                        </div>
                        @endif

                        <div class="mt-3">
                            <a href="{{ route('news.index') }}" class="btn btn-secondary">Orqaga</a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
