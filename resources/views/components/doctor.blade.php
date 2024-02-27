<div {{ $attributes->merge(['class'=>"flex flex-col justify-center items-center  p-4"])}}>
        <img src="{{ asset($img)}}" alt="" class="h-56">
        <a class="text-lg font-medium text-gray-600 my-4 cursor-pointer hover:text-pink-400 transition-all duration-300 ease-in-out underline">{{$name}}</a>
        <p class="text-gray-600  text-center">{{ $designation }}</p>
    </div>