<div class="card card-custom">
    <div class="card-body">
        <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
            <thead>
                <tr>
                    <th title="Field #1">id</th>
                    <th title="Field #3">Nome</th>
                    <th title="Field #7">Scadenza</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($domains as $domain)
                    <tr>
                        <td>{{$domain->id}}</td>
                        <td>{{$domain->name}}</td>
                        <td>{{$domain->expiration_date}}</td>
                        <td align="right">
                            <a class="btn btn-sm btn-secondary" href="{{route('domains.show', ['id' => $domain->id])}}"><i class="far fa-eye"></i></a>
                            <a class="btn btn-sm btn-primary" href="{{route('domains.edit', ['id' => $domain->id])}}"><i class="far fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!--end: Datatable-->
    </div>
</div>
