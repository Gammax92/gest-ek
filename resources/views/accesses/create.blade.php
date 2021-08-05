{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Nuovo dominio
        </h3>
    </div>
    <!--begin::Form-->


    <form class="form" method="post" action="{{ route('domains.store') }}" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @include('domains.form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Crea</button>
            <a href="{{route('domains.index')}}" class="btn btn-secondary">Annulla</a>
        </div>
    </form>
    <!--end::Form-->
</div>



@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

@endsection
