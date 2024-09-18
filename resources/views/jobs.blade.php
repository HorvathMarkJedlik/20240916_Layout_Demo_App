<x-layout>
    <x-slot name="title">Current jobs</x-slot>

    {{-- @dd($jobs); --}}
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}">
                <li>{{ $job['title'] }}</li>
            </a>
        @endforeach
    </ul>
</x-layout>