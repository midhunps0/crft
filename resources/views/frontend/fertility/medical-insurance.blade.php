@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Medical Insurance</x-header-sub>
    </section>
<img src="{{ asset('images/insurance.jpg') }}" alt="" class="my-10 lg:mb-20">

<x-footer />
@endsection
