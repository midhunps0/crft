@extends('frontend.app')
@section('container')

<x-header />
<section class="w-full  lg:px-10 mt-10">
    <h3 class="text-left text-2xl">About CRAFT</h3>
    <h1 class="text-left lg:text-4xl text-2xl tracking-wide mt-4 mb-16 capitalize text-pink-500 font-normal">Centre For Research in assisted reproduction and fetal therapy </h1>
    <img src="{{ asset('images/hospital1.jpg') }}" alt="" class="mx-auto mb-20">
    <p class="my-10 tracking-wide leading-8 text-gray-600 px-4 text-justify ">
        <span class="uppercase text-xl font-semibold ">spreading smiles of content: </span>
        Craft Fertility Hospital, located in Cityville, State, is a leading medical facility specializing
        in fertility treatment and reproductive healthcare. Committed to assisting individuals and
        couples on their journey to parenthood, we offers a range of advanced services including
        In Vitro Fertilization (IVF), Intrauterine Insemination (IUI), egg freezing, sperm banking,
        Preimplantation Genetic Testing (PGT), fertility preservation, reproductive surgery, and donor
        egg and sperm programs. Our expert team comprises skilled reproductive endocrinologists,
        embryologists, fertility nurses, and counselors, all dedicated to providing personalized care and
        support. The state-of-the-art facility features advanced laboratories for assisted reproductive
        technologies, private consultation rooms, and cutting-edge equipment for diagnostics and treatment
        . Craft Fertility Hospital is known for its commitment to patient success, with inspiring stories
        of
        individuals and couples who have successfully built their families with the clinic's support.
    </p>
    <p class="my-10 tracking-wide leading-8 text-gray-600 px-4 text-justify">
    Craft Fertility Hospital is a premier healthcare institution dedicated to offering a
    comprehensive array of fertility treatment and reproductive healthcare services.
    We pride ourselves on our commitment to personalized care, with a team of expert reproductive
    endocrinologists, embryologists,
     and fertility nurses providing individualized treatment plans and compassionate support.
    </p>
    <ul class="grid lg:grid-cols-2 text-gray-500 tracking-wide lg:px-20 lg:gap-10 mb-20 grid-cols-1 ltr:ml-8 gap-y-4 rtl:mr-8">
        <li class="list-disc">First ISO 9001:2000 Fertility Centre in India</li>
        <li class="list-disc">Specializing in a range of fertility treatments, including IVF, IUI, egg freezing, and sperm banking</li>
        <li class="list-disc">Dedicated team of reproductive endocrinologists, embryologists, and fertility nurses</li>
        <li class="list-disc">Equipped with advanced laboratories</li>
        <li class="list-disc">Understands the emotional aspects of fertility treatments, offering confidential counseling services for guidance and support.</li>
        <li class="list-disc">Offering a full spectrum of fertility treatments</li>
        <li class="list-disc"> Dedicated to offering a comprehensive array of fertility treatment and reproductive healthcare services</li>
        <li class="list-disc"> Offering options for those facing unique fertility challenges</li>
        <li class="list-disc"> Partner in the pursuit of parenthood, offering hope, expertise, and innovative solutions</li>

    </ul>

</section>





<x-footer />
@endsection
