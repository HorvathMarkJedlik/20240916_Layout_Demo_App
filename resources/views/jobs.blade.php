<x-layout>
    <x-slot name="title">Current jobs</x-slot>

    {{-- @dd($jobs); --}}
    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job['title'] }}</li>
        @endforeach
    </ul>
</x-layout>