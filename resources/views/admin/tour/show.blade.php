<x-layouts.admin>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Biz haqimizda: {{ $tour->title_uz }}</h4>
                </div>
                <div class="col-lg-6">
                    <div class="d-none d-lg-block">
                        <ol class="breadcrumb m-0 float-end">
                            <li class="breadcrumb-item"><a href="{{ route('tour.index') }}">Bosh sahifa</a></li>
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
                        <p><strong>O'zbek tilida:</strong> {{ $tour->title_uz }}</p>
                        <p><strong>Rus tilida:</strong> {{ $tour->title_ru }}</p>
                        <p><strong>Ingliz tilida:</strong> {{ $tour->title_en }}</p>

                        <!-- Content in different languages -->
                        <h2 class="mt-5 mb-3">Biz haqimizda batafsil</h2>
                        <div class="mb-3">
                            <h4>O'zbek tilida</h4>
                            <p>{{ $tour->content_uz }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Rus tilida</h4>
                            <p>{{ $tour->content_ru }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Ingliz tilida</h4>
                            <p>{{ $tour->content_en }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Narxi</h4>
                            <p>{{ $tour->price }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Necha kunlik</h4>
                            <p>{{ $tour->day }} kun</p>
                        </div>

                        <!-- Image display -->
                        @if ($tour->image)
                        <div class="mb-3">
                            <h4>Rasm</h4>
                            <img src="{{ asset('storage/' . $tour->image) }}" class="img-fluid" alt="tour Image">
                        </div>
                        @endif

                        <div class="mt-3">
                            <a href="{{ route('tour.index') }}" class="btn btn-secondary">Orqaga</a>
                        </div>
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- container -->
</x-layouts.admin>
