<div {{ $attributes }}>
    <table class="table-auto border-collapse w-full">
        <thead>
            <tr class="border-b-2 border-b-gray-400 dark:border-b-gray-500 bg-gray-100 dark:bg-gray-800">
                <th class="px-2 py-2 text-center">Theatre</th>
                <th class="px-2 py-2 text-center hidden md:table-cell">Date</th>
                <th class="px-2 py-2 text-center hidden lg:table-cell">Start time</th>
                <th class="px-2 py-2 text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($screenings as $screening)
                <tr class="border-b border-b-gray-400 dark:border-b-gray-500">
                    <td class="px-2 py-2 text-center">{{ $screening->theater->name }}</td>
                    <td class="px-2 py-2 text-center hidden md:table-cell">{{ $screening->date }}</td>
                    <td class="px-2 py-2 text-center hidden md:table-cell">{{ substr($screening->start_time, 0, 5) }}</td>
                    <td class="px-2 py-2 flex justify-center items-center">
                        <x-table.icon-add-cart class="px-0.5"
                            href="{{ route('seats.index', ['screeningSession' => $screening->id]) }}"/>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
