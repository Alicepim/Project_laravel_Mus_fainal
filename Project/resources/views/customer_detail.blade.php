@extends('layout')
@section('title')
    
@endsection
@section('content')
<div class="dark:bg-gray-800 dark:text-gray-100">
	<div class="container max-w-4xl px-10 py-6 mx-auto rounded-lg shadow-sm dark:bg-gray-900">
		<div class="flex items-center justify-between">
			<span class="text-sm dark:text-gray-400">{{$dataId->cm_name}}</span>
			<a rel="noopener noreferrer" href="#" class="px-2 py-1 font-bold rounded dark:bg-violet-400 dark:text-gray-900">{{$dataId->cm_income}}  million</a>
		</div>
		<div class="mt-3">
			<a rel="noopener noreferrer" href="#" class="text-2xl font-bold hover:underline">{{$dataId->cm_full_name}}</a>
			<p class="mt-2">{{$dataId->cm_about_cm}}</p>
		</div>
		<div class="flex items-center justify-between mt-4">
			<a rel="noopener noreferrer" href="/" class="hover:underline dark:text-violet-400">Back</a>
			<div>
				<a rel="noopener noreferrer" href="#" class="flex items-center">
					<img src="{{asset($dataId->cm_img)}}" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
					<span class="hover:underline dark:text-gray-400">{{$dataId->cm_phone}}</span>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection