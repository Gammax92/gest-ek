{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Modifca dominio
        </h3>
    </div>
    <!--begin::Form-->


    <form class="form" method="post" action="{{ route('domains.update',['id' => $domain->id]) }}" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @include('domains.form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Modifca</button>
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
