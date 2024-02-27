@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Male Fertility</x-header-sub>

</section>
<section class="w-full flex flex-col ltr:lg:ml-20 rtl:lg:mr-20 ltr:mx-4 rtl:mx-4">
    <h3 class="font-medium text-2xl mb-4">Neonate and Pediatric Care</h3>
    <x-image img="images/neonate.jpg"/>

    <x-paragraph>
        Craft IVF extends its commitment to comprehensive reproductive healthcare by offering specialized
        Neonate and Pediatric Care services.<br> The hospital's state-of-the-art facilities and a team of
        experienced pediatricians and neonatologists ensure the well-being of newborns and children.<br>
        We boasts a cutting-edge NICU equipped with advanced monitoring systems and life-saving technologies.
        <br>The NICU team, led by Dr. Jennifer Turner, specializes in providing intensive care to premature infants and those with medical complexities.
    </x-paragraph>
    <h3 class="font-medium text-xl mb-4">3800 live childbirths from men with absolutely zero sperm count</h3>
    <x-image img="images/fertlity2.jpg"/>

    <x-paragraph>

        It's important to note that a live childbirth from men with absolutely zero sperm count is scientifically and biologically implausible under normal circumstances.<br>
        A zero sperm count (azoospermia) typically means the absence of sperm in the semen. Without sperm, natural conception is not possible.

        <br>However, advancements in assisted reproductive technologies (ART) have provided options for men with azoospermia to become biological fathers through techniques <br>such as testicular sperm extraction (TESE) or microdissection testicular sperm extraction (Micro-TESE), followed by in vitro fertilization (IVF) or intracytoplasmic sperm injection (ICSI).
    </x-paragraph>
    <h3 class="font-medium text-xl mb-4">Andrology & Sexology</h3>
    <x-image img="images/preg2.jpg"/>

    <x-paragraph>
        To address the increased male infertility complications, CRAFT has a fully-fledged Andrology and Sexology department, headed by Dr. Sandeep Prabhakaran MS (PGI) MCh-Urology (SGPGI) Consultant Uro Andrologist & Sexologist. CRAFT is the only centre in India to do Micro TESE-ICSI, which is very effectively used in case of Non-obstructive Azoospermia, where the conventional TESE-ICSI or PESA–ICSI are not effective. We had several successful pregnancies for women with partners who were strongly advised for donor or with failed donor IVF cycles
    </x-paragraph>
    <h4 class="font-medium">Reproductive Urology</h4>
    <ul class="flex flex-col justify-start items-start list-disc ltr:ml-10 rtl:mr-10 mb-10">
        <li class="">Clinical Evaluation of Male Infertility</li>
        <li class="">Laboratory Evaluation of Male Infertility</li>
        <li class="">Basic Semen Analysis & Culture</li>
        <li class="">Sperm Function Test</li>
    </ul>


    <h4 class="font-medium">I. Advanced Semen Testing</h4>
    <ul class="flex flex-col justify-start items-start list-disc ltr:ml-10 rtl:mr-10 mb-10">
        <li class=""> Estimation of Seminal ROS (Reactive Oxygen Specimen)</li>
        <li class="">Estimation of DNA Fragmentation in Sperms (DFI)</li>
        <li class="">Genetic Testing
            <li class=""> Karyotyping</li>
            <li class="">Microdeletion in ‘Y’ chromosome (PCR)</li>
        </li>
    </ul>
   <h4 class="font-medium">II. Imaging Studies Ultrasound Scan 2D</h4>
    <ul class="flex flex-col justify-start items-start list-disc ltr:ml-10 rtl:mr-10 mb-10">
        <li class="">Scrotal Ultrasound Color Doppler</li>
        <li class="">Trans sectal Ultrasonography</li>
        <li class="">Abdominal Ultrasonography</li>
        <li class=""> Vasography-asses Patency of Male Genital Ductal System</li>
    </ul>
</section>

<x-footer />
@endsection
