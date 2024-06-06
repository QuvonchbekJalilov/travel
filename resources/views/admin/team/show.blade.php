<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>

<x-layouts.admin>

    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Our Team</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Bizning tamoa</a></li>
                                <li class="breadcrumb-item active">Bizning jamoa show</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Name</label>
                                    <p>{{ $team->name }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Kasbi {{ $lang }}</label>
                                    <p>{{ $team['job_' . $lang] }}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Description {{ $lang }}</label>
                                    <p>{!! $team['description_' . $lang] !!}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Image</label>
                                    @if ($team->image)
                                        <img src="{{ asset('storage/' . $team->image) }}" alt="Image" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('team.edit', $team->id) }}" class="btn btn-primary btn-squared px-30 mb-3">Edit</a><br>
                                    <a href="{{ route('team.index') }}" class="btn btn-default btn-squared btn-light px-20">Back to list</a>

                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

</x-layouts.admin>
