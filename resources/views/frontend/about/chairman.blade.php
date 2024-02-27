@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <div class="flex relative flex-col">
    <x-header-sub>Message from Chairman</x-header-sub>
        <div class="flex justify-start items-start mt-28 lg:flex-row flex-col ltr:lg:mr-10">
            <img src="{{ asset('images/ashraf.png')}}" alt="">
            <div class="flex flex-col ltr:lg:ml-10 rtl:lg:mr-10 lg:mt-0 mt-4">
            <p class="text-gray-600 mb-10 text-justify">
                Craft Fertility Clinic is a premier healthcare institution dedicated to offering a comprehensive
                array of fertility treatment and reproductive healthcare services. Located in the heart of Cityville,
                State, the clinic provides cutting-edge solutions for individuals and couples striving to build their
                families. Our services encompass a wide range of advanced fertility treatments, including In Vitro
                Fertilization (IVF), Intrauterine Insemination (IUI), egg freezing, sperm banking, Preimplantation
                Genetic Testing (PGT), reproductive surgery, and fertility preservation.
            </p>
            <p class="text-gray-600 mb-10 text-justify">
             We pride ourselves on our
                commitment to personalized care, with a team of expert reproductive endocrinologists, embryologists,
                and fertility nurses providing individualized treatment plans and compassionate support.
                Craft Fertility Clinic is also a pioneer in donor egg and sperm programs, offering options for
                those facing unique fertility challenges. Our state-of-the-art facilities feature advanced
                laboratories equipped with the latest technologies, ensuring the highest standards in assisted
                reproductive technologies. Additionally, our clinic provides dedicated counseling and support
                services to guide individuals through every step of their fertility journey.
                Craft Fertility Clinic is not just a medical institution; it is a partner in the
                pursuit of parenthood, offering hope,
                expertise, and innovative solutions to those seeking to expand their families.
            </p>
            <p class="text-gray-600 text-justify">
            The clinic's expert team comprises skilled reproductive endocrinologists, embryologists,
            fertility nurses, and counselors, all dedicated to providing personalized care and support.
             The state-of-the-art facility features advanced laboratories for assisted reproductive technologies,
              private consultation rooms, and cutting-edge equipment for diagnostics and treatment.
              Craft Fertility Clinic is known for its commitment to patient success, with inspiring stories
              of individuals and couples who have successfully built their families with the clinic's support.
             For inquiries or to learn more about the services offered
            </p>
            </div>
        </div>
    </div>
</section>

<x-footer />
@endsection
