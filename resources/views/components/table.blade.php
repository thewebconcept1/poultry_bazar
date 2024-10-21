<table id="datatable" class="container dataTable">
    <thead class="w-full font-semibold text-white gradient-bg ">
        <tr class="w-full border-b">
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="border-b border-gray-500">
        {{-- <tr class="border-b"> --}}

        </tr>
        {!! $body !!}

    </tbody>
</table>
