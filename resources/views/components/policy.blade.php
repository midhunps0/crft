<div {{ $attributes->merge(['class'=>"flex flex-col w-full p-4 mx-2 shadow-xl bg-white lg:mb-10 lg:w-40 lg:py-4 lg:px-2 h-92"])}}>
    <div class="flex justify-center items-center px-10l lg:flex-col">
        <img src="{{asset($img)}}" alt="" class="h-16 mr-1 lg:h-10 lg:mt-2">
        <h1 class="text-gray-600 font-bold lg:text-center">{{ $policy }}</h1>
    </div>
    <p class="p-4 lg:hidden">
        {{$content}}
    </p>
</div>