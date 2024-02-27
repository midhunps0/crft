@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20 flex flex-col">
<x-header-sub>International Patients</x-header-sub>
    <div class="flex flex-col  text-gray-500 tracking-wide mt-28 mb-16 justify-start items-start ltr:lg:ml-20 rtl:lg:mr-20">
        <img src="{{ asset('images/doctors-2.png') }}" alt="" class="mx-auto mb-10">
        <p class="ltr:lg:ml-40 mb-4">
            Meanwhile you prepare to travel our place you may read about:
        </p>
        <p class="mb-4 ltr:lg:ml-40  ltr:lg:mr-10">
            We are located 25km away from cochin international airport,Railway stations (22 km from aluva, 15 km from irijalakuda & 40 km from Thrissur ), located on cochin-pavel national highway 66 between Edappally and Guruvayur. We are just 25 km away from Edappally Lulu mall on a staright road connecting kochi
        </p>
        <p class="my-4 ltr:lg:ml-40">On your arrival at Kerala</p>
        <p class="mb-4 ltr:lg:ml-40">We are happy to assist you for commuting between your arrival point to the hospital on your prior imitation to us</p>
        <h4 class="ltr:lg:ml-40 text-lg font-medium mb-4">For International Patients</h4>
        <span class="ltr:lg:ml-40 mt-2 mb-4">For vissa assistance and invitation letters write us message</span>
        <h5 class="ltr:lg:ml-40 mb-4">WhatsApp: <span class="underline">+918590904036</span></h5>
        <h5 class="ltr:lg:ml-40 mb-4">Email: <span class="underline">guestrelations@craftivf.com</span></h5>
        <p class="ltr:lg:ml-40 my-10">To make your visit more pleasant and convenient you may please carry previous and current medical records</p>
        <h4 class="ltr:lg:ml-40 text-lg font-medium">For domestic patients</h4>
        <p class="ltr:lg:ml-40 mt-2 mb-4">We will happy to assist you on your arrival at our hospital by customer service executive to make your visit  hassle-free. You must please carry any previous medical records and patients id cards to serve you better
        </p>
        <p class="ltr:lg:ml-40 mb-4">
            We are awaiting your visit to our facility , kindly let's
            know the arrival date to facilitate your visit and give  you best experience
        </p>
        <h5 class="my-4 ltr:lg:ml-40">Please call us on  <span class="underline">+91 480 2800200</span></h5>
        <h5 class="my-4 ltr:lg:ml-40">WhatsApp: <span class="underline">+918590904036</span></h5>
        <h5 class="my-4 ltr:lg:ml-40">Email: <span class="underline">info@craftivf.com</span></h5>
        <span class="my-4 ltr:lg:ml-40">well before your arrival</span>


    </div>
</section>

<x-footer />
@endsection
