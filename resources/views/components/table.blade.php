<table id="datatable" class="dataTable">
    <thead class="gradient-bg w-full  text-white font-semibold ">
        <tr class="border-b ">
            @foreach ($headers as $header)
                <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody class="border-b  border-gray-500">
        {{-- <tr class="border-b"> --}}

        </tr>
        {!! $body !!}

    </tbody>
</table>
