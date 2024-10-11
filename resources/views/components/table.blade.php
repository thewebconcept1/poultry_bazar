<table id="datatable" class="dataTable">
    <thead class="gradient-bg">
        <tr>
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>

        {!! $body !!}

    </tbody>
</table>
