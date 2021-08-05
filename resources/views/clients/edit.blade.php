{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Modifca Cliente
        </h3>
    </div>
    <!--begin::Form-->


    <form class="form" method="post" action="{{ route('clients.update',['id' => $client->id]) }}" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @include('clients.form')
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary mr-2">Modifca</button>
            <a href="{{route('clients.index')}}" class="btn btn-secondary">Annulla</a>
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
