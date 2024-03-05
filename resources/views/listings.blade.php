@extends('layout')

@section('content')
    <h1>{{ $heading }}</h1>
    @if (count($listings) == 0)
        <p>No listings found</p>
    @endif

    <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-6 md:space-y-0">
        @foreach ($listings as $listing)
            <div class="p-5 bg-white border rounded-lg shadow-sm overflow-hidden">
                <div class="flex items-center justify-between">
                    <span class="px-3 py-1 bg-green-500 text-sm font-semibold text-white rounded-full cursor-pointer">Full
                        time</span>
                    <span class="font-medium text-lg text-gray-900">Ksh 80,000</span>
                </div>

                <div class="flex justify-center mt-5 text-xl font-semibold tracking-wide">
                    Software developer
                </div>
                <div class="flex items-center justify-center space-x-2 text-blue-500 mt-1">
                    <i class="fa-regular fa-building text-xl"></i>
                    <span>Apple Inc</span>
                </div>

                <div class="flex justify-center mt-2 space-x-2">
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        Backend</span>
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        Next.js
                    </span>
                    <span
                        class="text-gray-900 bg-white border border-gray-300 px-2 py-1 rounded-full text-xs font-medium cursor-pointer">
                        JavaScript
                    </span>
                </div>

                <div class="justify-center mt-3">
                    <p class="line-clamp-3 text-gray-700 text-base">{{ $listing->description }}</p>
                </div>

                <div class="flex justify-center mt-4">
                    <a href="/{{ $listing->id }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold shadow-sm transition duration-300 ease-in-out">
                        View Job
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
