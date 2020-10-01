@extends('layouts.auth')

@section('content')
<section class="section">
    <div class="d-flex flex-wrap align-items-stretch">
        <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
            <div class="p-4 m-3">

                @include('auth.partials.login._header')
               
                @include('auth.partials.login._form')

                @include('auth.partials.login._footer')
                
            </div>
        </div>
        
        @include('auth.partials.login._body_background')
    </div>
</section>
@endsection