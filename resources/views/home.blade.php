@extends('layouts.app')

@section('content')
<div class="container flex flex-column justify-content-center">
    <div class="flex justify-content-center full-width mt-4">
        <div class="row justify-content-center align-items-center full-width my-6">
            <div class="col-md-8">
                <div class="card half-page-height bg-grad-red-orange mt-2">
                    <div class="flex justify-content-center align-items-center full-height p-4">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
        
                        <h1 class="white">{{ __('Home') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breakout code-background">
    <div class="flex flex-column justify-content-center align-items-center">
        <div class="row justify-content-center full-width mt-6">
            <div class="flex flex-column align-items-center text-center px-6">
                <h2 class="white video-game-font">Codepen</h2>
                <p class="mt-4 px-lg-4">Codepen is a site that allows you to create and host smaller software projects.</p>
                <p class="px-lg-4">It's basically the programmer version of doodling!</p>
            </div>
        </div>
        <div class="row justify-content-center full-width my-4 px-4">
            <div class="col-lg-10">
                @include('components.codepen.kyoob')
            </div>
        </div>
    </div>
</div>
@endsection
