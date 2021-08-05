<div class="row">

    <div class="col-lg-4">
        <div class="form-group">
            <label>Nominativo</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('name',$client->name)}}" @endif name="name" type="text" class="form-control form-control-solid" placeholder="Nominativo" />
        </div>
    </div>
    <div class="col-lg-2">
        <div class="form-group">
            <label>Codice univoco</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('uuid',$client->uuid)}}" @endif name="uuid" type="text" class="form-control form-control-solid" placeholder="Codice univoco" />
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <label>Partita IVA</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('piva',$client->piva)}}" @endif type="text" name="piva" class="form-control form-control-solid" placeholder="Partita IVA" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label>Email *</label>
            <input required @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('email',$client->email)}}" @endif name="email" type="email" class="form-control form-control-solid" placeholder="Email" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Telefono fisso</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('phone',$client->phone)}}" @endif name="phone" type="text" class="form-control form-control-solid" placeholder="Telefono fisso" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label>Telefono mobile</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('mobile',$client->mobile)}}" @endif name="mobile" type="text" class="form-control form-control-solid" placeholder="Telefono mobile" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label>Persona di riferimento</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('reference_person',$client->reference_person)}}" @endif type="text" name="reference_person" class="form-control form-control-solid" placeholder="Persona di riferimento" />
        </div>
    </div>
    <div class="col-lg-8">
        <div class="form-group">
            <label>Sede</label>
            <input @if(Route::is('*.show') ) disabled @endif  @if(isset($client)) value="{{old('address',$client->address)}}" @endif type="text" name="address" class="form-control form-control-solid" placeholder="Sede" />
        </div>
    </div>

</div>
