
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label>Nome</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Cliente</label>
            <select class="form-control kt-select2 " id="select2-clients" name="client_id" autocomplete="off"  @if(Route::is('*.show') ) disabled @endif>
                <option selected value="">Seleziona un cliente</option>
                @foreach ($clients as $client)
                    <option
                    @if (isset($domain) && $client->id == $domain->client_id) selected @endif
                    value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Scadenza</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('expiration_date',$domain->expiration_date)}}" @endif type="text" name="expiration_date" class="form-control form-control-solid datepicker" placeholder="Scadenza" />
        </div>
    </div>
</div>


<?php // TODO: FRANCESCO - Sistemare campi ?>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>IP Pubblico</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label>Autenticazione (Tipologia)</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>database name</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label>database password</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label>FTP name</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label>FTP password</label>
            <input @if(Route::is('*.show') ) disabled @endif @if(isset($domain)) value="{{old('name',$domain->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nome" />
        </div>
    </div>
</div>
