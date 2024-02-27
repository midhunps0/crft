@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Neonate and Pediatric Care</x-header-sub>
</section>
<section class="w-full flex flex-col justify-start items-start lg:mx-20">

    <h3 class="font-medium text-2xl mb-8">Neonate and Pediatric Care</h3>
    <x-image img="images/neonate/baby.jpg" />
    <p class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40">
        very Fertility Management Centre incomplete without a Neonatology & Pediatrics division. We’ve a fully fledged Neo-Natology department to take care of the antenatal and post-natal period of high-risk mothers and new born babies, We’ve a highly competent team of Senior Obstetricians, and a highly advanced and fully facilitated Level 3 NICU. It has the credit of being one of the most sought after and largest Accredited NICU in Kerala. With over a 30 bed capacity we present a survival rate of almost above 95% cases.
        At the helm of affairs of the NICU we have by Dr. Abdul Majeed, MD, Fellow in Neo Natology. Dr. Majeed is a PG Gold Medalist and completed his fellowship from Amrita Institute of Medical Sciences in Neo Natology.
    </p>
    <img src="{{ asset('images/neonate/screenshot.png')}}" alt="" class="ltr:lg:pr-40 rtl:lg:pl-40 my-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-x-10 w-full my-10 lg:px-40">
        <x-doctor img='images/neonate/abdul-majeed.jpg' name='Dr Abdul Majeed A' designation='Chief, Department of Neonatology MD, DCH, Fellowship in Neonatology' />
        <x-doctor img='images/neonate/Dr-Murali.jpg' name='Dr. N Murali Raj' designation='Pediatrician DCH, DNB (Ped), Fellowship in Neonatology (NNF)' />
    </div>
</section>
<x-footer />
@endsection
