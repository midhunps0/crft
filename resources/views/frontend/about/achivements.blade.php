@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Our Achievments</x-header-sub>
    <div class="text-gray-600 tracking-wide mt-28 mb-16 ltr:lg:ml-20 rtl:lg:mr-20 ltr:ml-4 rtl:mr-4 ">
        <h3 class="font-bold text-lg mb-4 text-black">Our Works Speaks...</h3>
        <p class="mb-2">
        Craft IVF is a renowned fertility and reproductive healthcare center committed to excellence in assisted reproductive technologies (ART).
        </p><p> In 2000, it has consistently achieved milestones in the field of reproductive medicine.
        </p>
        <h3 class="font-bold text-lg my-4 text-black">Our publications in top most journal</h3>
        <p class="mb-2">
        Fictitious publications showcase Craft IVF's commitment to advancing
         scientific knowledge in the field of reproductive medicine and their contributions to top-tier journals.
        </p>
        <p class="mb-8">
         Craft IVF takes a holistic approach in this comprehensive study, shedding light on the psychosocial impact of infertility on couples.
          <br>The publication emphasizes the importance of integrated
          mental health support in fertility clinics, addressing the emotional well-being of patients undergoing fertility treatments.
        </p>
    </div>
    <div class="flex justify-center items-start lg:flex-row flex-col rtl:lg:mr-0 rtl:mr-10 ltr:ml-4 ltr:lg:ml-0">
        <div class="ltr:lg:mr-16 rtl:lg:ml-16">
            <h3 class="font-bold text-lg mb-4">First prize in national conference</h3>
            <ul class="ltr:ml-8 rtl:mr-8">
                <li class="list-disc mb-2">Fertivision 2020</li>
                <li class="list-disc mb-2">Yuva - FOGSI 2021</li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold text-lg mb-4">Presentation in International Conference</h3>
            <ul class="ltr:ml-8 rtl:mr-8">
                <li class="list-disc mb-2">Dr Mohammed C Ashraf - ESHRE 1997</li>
                <li class="list-disc mb-2">Dr Swati Singh - ESHRE 2015</li>
                <li class="list-disc mb-2">Dr Ritu Hari - RBMO 2017</li>
                <li class="list-disc mb-2">Dr Sankalp Singh - ESHRE 2020</li>
                <li class="list-disc mb-2">Dr Raiza Ashraf - ASRM-2018</li>
                <li class="list-disc mb-2">Dr Noushin Abdul Majiyd - ASRM 2019, ASRM 2020</li>
                <li class="list-disc mb-2">Dr Apeksha Sahu - ESHRE 2021</li>
                <li class="list-disc mb-2">Dr Apeksha Sahu - RCOG 2021</li>
                <li class="list-disc mb-2">Dr Apeksha Sahu - FIGO 2021</li>
                <li class="list-disc mb-2">Dr Raiza Ashraf - ASRM-2021</li>
                <li class="list-disc mb-2">Dr Noushin Abdul Majid - FETAL MEDICINE WORLD CONGGRESS 2021</li>
            </ul>
        </div>
    </div>
</section>
<section class="w-full my-10 lg:px-20 px-10 grid lg:grid-cols-2 md:grid-cols-2 md:gap-8 grid-cols-1 lg:gap-16 gap-y-8">
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/lifeac.jpg')}}" alt="">
        <p class="">Let us take this moment to congratulate Dr. C Mohamed Ashraf for this Life time Achievement Award and we, at CRAFT Hospital, are always proud of you sir…</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/baby.jpg')}}" alt="">
        <p class="">Huntington’s Chorea is a rare inherited neurodegenerative disease affecting the bases of DNA in the HTT gene of humans.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/FIRST-IN-INDIA.jpg')}}" alt="">
        <p class="">FIRST IN INDIA, SECOND IN THE WORLD: BIRTH OF A HEALTHY BABY FREE FROM CITRULINEMIA THROUGH PGT-M (As per NCBI articles on PGD)</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/PGT-M.jpg')}}" alt="">
        <p class="">PGT-M: A RAY OF HOPE FOR COUPLES WITH GENETIC DISEASES</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/ASRM.jpg')}}" alt="">
        <p class="">Congratulations Dr. Noushin Abdul Majiyid MD FRM MRCOG (UK) MRCP (IE) for getting your abstract accepted by American Society of Reproductive Medicine-ASRM. You make us all proud!</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Medcare.jpg')}}" alt="">
        <p class="">Another success story by Dr. C. Mohamed Ashraf MD DGO DPS at Medcare Hospital, Dubai.</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/ASRM-topic.jpg')}}" alt="">
        <p class="">We did it again! Our Director and Senior Reproductive Medicine Consultant Dr. Noushin Ashraf MD FRM MRCOG (UK) MRCP (IE) has successfully presented</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/intra.jpg')}}" alt="">
        <p class="">Talk on topic “Use of Intra ovarian PRP does not increase ovarian reserve markers, ovarian response or IVF outcome in Bolgona poor responders” at ESHRE</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/CHAMPION-OF-ISAR-01.jpg')}}" alt="">
        <p class=""> Our Chief Geneticist Dr. Ritu Hari got felicitated as “CHAMPION OF ISAR“ for her dedication towards Preimplantation Genetics.</p>
    </div>


    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Fetal-Medicine.png')}}" alt="">
        <p class="">Our Research Article on “Genuine Empty Follicle Syndrome: Role of Double Trigger and Delayed Oocyte Retrieval (DTDO)” got published at JHRS journal.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/fungal-sepsis.jpg')}}" alt="">
        <p class="">Dr. Murali Raj DCH, DNB, NNF delivering talk on fungal sepsis in neonates at South Neocon 2020, where He explains about a case of fungal sepsis in CRAFT</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/1.jpeg')}}" alt="">
        <p class="">Dr Noushin Abdul Majiyd receiving Dr Gautham Khastagir National Researcher Award at Indian Society of Assisted Reproduction (ISAR)</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/2.jpeg')}}" alt="">
        <p class="">Dr Noushin Abdul Majiyd receiving ISAR Youth Icon Award.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/3.jpeg')}}" alt="">
        <p class="">Dr Alisha Shafjeer receiving ISAR Youth Icon Award</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Ovulation-Induction-and-IUI.jpg')}}" alt="">
        <p class="">Dr. Noushin invited as speaker for ISAR-2019 Kerala Chapter on topic “Ovulation Induction and IUI”</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/5.jpeg')}}" alt="">
        <p class="">Dr Reema Basheer receiving ISAR Youth Icon Award.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/perivitelline-space.jpg')}}" alt="">
        <p class="">Dr. Raiza Ashraf presenting study on “IVF outcome in women with entire cohort of oocytes having coarse granulation in perivitelline space” at ASRM Scientific Congress and Expo October 2019</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/7.jpeg')}}" alt="">
        <p class="">For Felicitated by ISAR-MEYER team with “Youth Icon Award ” for her contribution and work for Fertility society</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/8.jpeg')}}" alt="">
        <p class="">For Achieving the prestigious Dr Manish Banker Award competition</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/award.jpg')}}" alt="">
        <p class="">What a wonderful day for us from Horizon 2019. Dr. Ashraf received Horizon Award for Excellence in Laparoscopy and Infertility and Dr. Noushin received Pearl of TOGS Award at Horizon 2019.</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/lecture.jpeg')}}" alt="">
        <p class="">Dr. Noushin Ashraf gave a lecture on reducing pregnancy loss after IVF in ACE conference held in Delhi</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/embryology-course.jpg')}}" alt="">
        <p class="">Dr. Sparsha presenting our PGT A data at Fertivision Delhi, which has shown favourable implantation rates. One of the first study for RIF group of patients.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/newborn.jpg')}}" alt="">
        <p class="">The excellency of the medical team at CRAFT Hospital is not confined to the boundaries of the hospital, they also excels outside the hospital.</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Mild-Stimulation.jpg')}}" alt="">
        <p class="">Throwback to those days when Dr. Noushin was one of the panelist on topic Mild Stimulation at ISAR 2019 Kerala Chapter</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Much-appreciated-talk.jpg')}}" alt="">
        <p class="">Much appreciated talk by Dr. Noushin Ashraf (MD, FRM, MRCOG-UK, MRCP-IE) at Yuva ISAR</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/Neonatology-and-Anasthesia-02.jpg')}}" alt="">
        <p class="">Great achievement for CRAFT Neonatology and Anasthesia team Baby weighing 1.4 Kg was operated today for diaphragmatic hernia.</p>
    </div>

    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/presentation.jpg')}}" alt="">
        <p class="">Dr. Sparsha presenting our PGT A data at Fertivision Delhi, which has shown favourable implantation rates. One of the first study for RIF group of patients.</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/thyroid.jpg')}}" alt="">
        <p class="">Dr. Noushin speaking on subject ‘Thyroid and Fertility’ at Diabetes Today 2019, Trivandrum</p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/whatsup.jpeg')}}" alt="">
        <p class=""></p>
    </div>
    <div class="bg-white px-10 py-4  border-2 border-gray-600   border-opacity-50   flex flex-col">
        <img src="{{ asset('images/achievments/young-award.jpg')}}" alt="">
        <p class="">Dr. Noushin Abdul Majiyd (MD, FRM, MRCOG-UK, MRCP-IE) received Young Turk Award from YOGSI at C2D2 International Conference in Mumbai.</p>
    </div>

</section>

<x-footer />
@endsection
