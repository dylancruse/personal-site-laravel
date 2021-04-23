@extends('layouts.app')

@section('content')
<div class="container flex align-items-center justify-content-center full-height">
    <div class="row full-width justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('This is the home page') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
