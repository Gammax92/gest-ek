{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
    <div class="card-header">
        <h3 class="card-title">
            Visualizza Dominio
        </h3>
    </div>
    <!--begin::Form-->


    <form class="form" method="post" action="{{ route('domains.store') }}" enctype="multipart/form-data">
        <div class="card-body">
            @csrf
            @include('domains.form')
        </div>
        <div class="card-footer">
            {{-- <button type="submit" class="btn btn-primary mr-2">Crea</button> --}}
            {{-- <a href="{{route('domains.index')}}" class="btn btn-secondary">Annulla</a> --}}
            @if (count($clients)> 0)
                <button id="notify-expiration" type="button" class="btn btn-primary mr-2">Notifica scadenza</button>
            @endif
            
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
    <script>
        console.log('asdsadaa');
        let notifyBtn = document.querySelector('#notify-expiration');
        if (notifyBtn) {
            notifyBtn.addEventListener('click', function(e){
                e.preventDefault();
                axios.post("{{route('domains.notify-expiration',['domain' => $domain])}}").then(function (response){
                    console.log(response);
                    alert(response.data.message);
                });
            });
        }
    </script>
@endsection
