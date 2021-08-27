@extends('customer.cu-dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-white bg-info">Enter a inquiry </div>
                    {{-- @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif --}}
                    <div class="card-body">
                        <form method="POST" action="{{ route('contact.inqurie') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="first name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    {{-- commented error display msg because i already used
                                    sweert alert for displaying errors --}}
                                    {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inqurie" class="col-md-4 col-form-label text-md-right">Inqurie</label>

                                <div class="col-md-6">
                                    <textarea id="inqurie" type="text" rows="5" class="form-control @error('inqurie') is-invalid @enderror"
                                        name="inqurie" value="{{ old('inqurie') }}" required autocomplete="inqurie" autofocus></textarea>
                                    {{-- commented error display msg because i already used
                                    sweert alert for displaying errors --}}
                                    {{-- @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-info">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"]);


@endsection
