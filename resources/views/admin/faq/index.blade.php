<x-layouts.admin>
    <div class="container-fluid">
        <!-- start page title -->
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0">Tez tez so'raladigan savollar</h4>
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
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="py-3 py-lg-4">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="page-title mb-0"></h4>
                </div>
                <div class="col-lg-6 text-end">
                    <a href="{{ route('faq.create') }}" class="btn btn-primary">
                        <i class="mdi mdi-plus-circle"></i> Create New
                    </a>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Savol</th>
                                    <th>Ma'lumot</th>
                                    <th>Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>{{ $faq->title_uz}}</td>
                                    <td>{{ $faq->text_uz}}</td>
                                    <td>
                                        <div class="mx-1 d-inline-block">
                                            <a href="{{ route('faq.edit', $faq->id) }}"><i class="mdi mdi-book-edit-outline fs-3"></i></a>
                                        </div>
                                        <div class="mx-1 d-inline-block">
                                            <a href="{{ route('faq.show', $faq->id) }}"><i class="mdi mdi-eye fs-3"></i></a>
                                        </div>
                                        <div class="mx-1 d-inline-block">
                                            <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="border: none; background: none; cursor: pointer;"><i class="mdi mdi-trash-can-outline fs-3 text-danger"></i></button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->

    </div> <!-- container -->
</x-layouts.admin>