<div {{$attributes->merge(['class'=>"flex flex-col bg-white shadow-xl lg:w-52 w-40 justify-center items-center p-4"])}}>
    <img src="{{asset('icons/baby-icon.png')}}" alt="" class="lg:w-20 w-12">
    <p class="text-3xl font-semibold">{{$count}}</p>
    <p class="pt-2">{{$treatment}}</p>
</div>