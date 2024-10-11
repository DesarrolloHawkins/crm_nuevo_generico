@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex flex-column mb-3">
        <h2 class="mb-0 me-3 encabezado_top">{{ __('Crear Estado de Email') }}</h2>
    </div>
    <hr>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <form action="{{ route('admin.statusMail.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="other" class="form-label">Otro</label>
                    <input type="text" class="form-control @error('other') is-invalid @enderror" id="other" name="other" value="{{ old('other') }}">
                    @error('other')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-terminar w-100 fs-4 mt-4">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection
