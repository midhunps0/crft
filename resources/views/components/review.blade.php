<div {{ $attributes->merge(['class'=>"bg-white shadow-xl w-80 p-4  mx-auto mb-10"])}}>
    <div class="flex justify-start items-center font-arial">
        <i class="fa-solid fa-quote-left text-pink-400 text-4xl p-2"></i>
        <div class="flex flex-col">
            <h1 class="ml-2 font-bold text-black capitalize">{{$name}}</h1>
            <div class="flex text-yellow-400 ml-4">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>


        </div>
    </div>
    <p class="my-4 text-sm leading-6 font-arial">
        {{$review}}
    </p>
</div>
