@extends('layout')
@section('title')
@endsection
@section('content')
    <!-- Content -->
    <div class="flex-1 px-2 sm:px-0">
        <div class="flex justify-between items-center">
            <h3 class="text-3xl font-extralight text-white/50">Groups</h3>
            <div class="inline-flex items-center space-x-2">
                <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                    </svg>
                </a>
                <a class="bg-gray-900 text-white/50 p-2 rounded-md hover:text-white smooth-hover" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                    </svg>
                </a>
            </div>
        </div>
        {{-- add content  --}}
        <div class="mb-10 sm:mb-0 mt-10 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <div
                class="group bg-gray-900/30 py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/40 hover:smooth-hover">
                <a class="bg-gray-900/70 text-white/50 group-hover:text-white group-hover:smooth-hover flex w-20 h-20 rounded-full items-center justify-center"
                    href="/customer_form">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </a>
                <a class="text-white/50 group-hover:text-white group-hover:smooth-hover text-center" href="#">Company
                    group</a>
            </div>

            {{-- content  --}}
            @foreach ($dataCompany as $item)
                <a href="{{route('detail',$item->id)}}">
                  <div
                    class="relative group bg-gray-900 py-10 sm:py-20 px-4 flex flex-col space-y-2 items-center cursor-pointer rounded-md hover:bg-gray-900/80 hover:smooth-hover">
                    <img class="w-20 h-20 object-cover object-center rounded-full" src="{{ asset($item->cm_img) }}"
                        alt="cuisine" />
                    <h4 class="text-white text-2xl font-bold capitalize text-center">{{ $item->cm_name }}</h4>
                    <p class="text-white/50">{{ $item->cm_phone }}</p>
                </div>
                </a>
            @endforeach

        </div>
    </div>
@endsection
