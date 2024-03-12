@extends('layout')
@section('title')
@endsection
@section('content')
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{-- <div class="flex items-center justify-center min-h-screen bg-gray-900"> --}}
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th class="p-3">Name</th>
                            <th class="p-3 text-left">Phone</th>
                            <th class="p-3 text-left">Full Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($companyAll as $item)
                        <tr class="bg-gray-800">
                            <td class="p-3">
                                <div class="flex align-items-center">
                                    <img class="rounded-full h-12 w-12  object-cover"
                                        src="{{asset($item->cm_img)}}"
                                        alt="unsplash image">
                                    <div class="ml-3">
                                        <div class="">{{$item->cm_name}}</div>
                                        <div class="text-gray-500">{{$item->cm_phone}}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="p-3">
                                {{$item->cm_full_name}}
                            </td>
                            <td class="p-3 font-bold">
                                {{$item->cm_income}}
                            </td>
                            <td class="p-3 ">
                                <a href="{{route('edit',$item->id)}}" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="{{route('delete',$item->id)}}" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    {{-- </div> --}}
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
@endsection
