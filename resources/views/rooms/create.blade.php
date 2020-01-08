@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-4">
                Register Room
            </h1>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form action="{{ route('rooms.store') }}" method="post">
                @csrf

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Name</label>
                    <div class="col-md-8">
                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror"
                            required
                            autofocus
                        >
                    </div>

                    @error('name')
                    <div class="col-md-9 offset-md-3">
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div><!-- /.form-group row -->

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Capacity</label>
                    <div class="col-md-2">
                        <input
                            type="number"
                            name="capacity"
                            value="{{ old('capacity') }}"
                            class="form-control @error('capacity') is-invalid @enderror"
                            required
                        >
                    </div><!-- /.col -->
                    @error('capacity')
                    <div class="col-md-9 offset-md-3">
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div><!-- /.form-group row -->

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Projector</label>
                    <div class="col-md-6 mt-2">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="projector"
                                id="projectorCheckbox1"
                                {{ old('projector', 0) == 1 ? 'checked' : '' }}
                                value="1">
                            <label class="form-check-label" for="projectorCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="projector"
                                id="projectorCheckbox2"
                                {{ old('projector', 0) == 0 ? 'checked' : '' }}
                                value="0">
                            <label class="form-check-label" for="projectorCheckbox2">No</label>
                        </div>
                    </div><!-- /.col -->
                    @error('projector')
                    <div class="col-md-9 offset-md-3">
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div><!-- /.form-group row -->

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Flip Chart</label>
                    <div class="col-md-6 mt-2">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flip_chart"
                                id="flipChartCheckbox1"
                                {{ old('flip_chart', 0) == 1 ? 'checked' : '' }}
                                value="1">
                            <label class="form-check-label" for="flipChartCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="flip_chart"
                                id="flipChartCheckbox2"
                                {{ old('flip_chart', 0) == 0 ? 'checked' : '' }}
                                value="0">
                            <label class="form-check-label" for="flipChartCheckbox2">No</label>
                        </div>
                    </div><!-- /.col -->
                    @error('flip_chart')
                    <div class="col-md-9 offset-md-3">
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div><!-- /.form-group row -->

                <div class="form-group row">
                    <label class="col-form-label col-md-3">Wi-Fi</label>
                    <div class="col-md-6 mt-2">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="wifi"
                                id="wifiCheckbox1"
                                {{ old('wifi', 0) == 1 ? 'checked' : '' }}
                                value="1">
                            <label class="form-check-label" for="wifiCheckbox1">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input"
                                type="radio"
                                name="wifi"
                                id="wifiCheckbox2"
                                {{ old('wifi', 0) == 0 ? 'checked' : '' }}
                                value="0">
                            <label class="form-check-label" for="wifiCheckbox2">No</label>
                        </div>
                    </div><!-- /.col -->
                    @error('wifi')
                    <div class="col-md-9 offset-md-3">
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                    @enderror
                </div><!-- /.form-group row -->

                <div class="form-group row">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-success">
                            Save Room
                        </button>

                        <a href="{{ route('rooms.index') }}" class="btn btn-link">
                            Cancel
                        </a>
                    </div>
                </div><!-- /.form-group row -->

            </form>

        </div>
    </div>
</div>
@endsection
