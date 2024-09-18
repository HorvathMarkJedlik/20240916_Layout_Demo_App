<x-layout>
    <x-slot name="title">Position: {{ $job['title'] }}</x-slot>

    <h2>Description</h2>
    {{ $job['description'] }}

    <h2 class="mt-3" >Location</h2>
    {{ $job['location'] }}

</x-layout>