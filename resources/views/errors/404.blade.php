@extends('errors.error')
@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh">
        <div class="d-flex flex-column justify-content-between">
            <div class="row justify-content-center mt-5">
                <div class="text-center page-404">
                    <h1 class="error-title">404</h1>
                    <p class="pt-4 pb-5 error-subtitle">Looks like something went wrong.</p>
                    <a href="index.html" class="btn btn-primary btn-pill">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
