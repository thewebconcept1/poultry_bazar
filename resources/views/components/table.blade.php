<table id="datatable" class="dataTable ">
    <thead class="gradient-bg text-white font-semibold ">
        <tr class="border-b">
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="border-b border-gray-500">

        {!! $body !!}

    </tbody>
</table>
