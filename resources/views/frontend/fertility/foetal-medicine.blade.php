@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Foetal Medicine</x-header-sub>
</section>
<section class="w-full flex flex-col justify-start items-start lg:mx-20">

    <h3 class="font-medium text-2xl mb-2">Fetal Medicine and Perinatology</h3>
    <img src="{{ asset('images/foetal/ultrasound.jpg')}}" alt="" class="w-full ltr:lg:pr-40 rtl:lg:pl-40 my-8">

    <p class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40 font-semibold text-lg mb-2">
        Fetal Medicine offers comprehensive fetal care with services ranging from preconception counselling to diagnosing the fetal problems and therapy for in-utero conditions.
    </p>
    <p class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40">
        A group of committed obstetricians, fetal medicine consultant, geneticists and neonatologists ensure that both the mother and child successfully undergo term.
    </p>
    <h3 class="font-medium text-2xl my-4">Facilities in the Department</h3>
    <ul class="text-justify leading-8 ltr:lg:pr-40 rtl:lg:ml-40 ltr:ml-4 rtl:mr-4">
        <li class="mb-2">– We employ high-end state-of-the-art ultrasound machines like, Voluson E10 and E8 in order to deliver best diagnostic results.</li>
        <li class="mb-2">– Our Ultrasound scans are powered by SONOCARE, a reporting software specifically designed to meet the changing needs of ultrasound reporting, image capture and retrieval.</li>
        <li class="mb-2">– The Consultant performing NT scans are accredited to Fetal Medicine Foundation, UK. It includes Universal Screening of all pregnant women for Downs’s syndrome after Pre-test counselling. If screening returns positive, women will be offered diagnostic test to confirm the condition</li>
    </ul>
    <h3 class="font-medium text-2xl my-4">Services Provided At Clinic</h3>
    <img src="{{ asset('images/foetal/upload.jpg')}}" alt="" class="w-full ltr:lg:pr-40 rtl:lg:pl-40 my-8">

    <p class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40">
        Obstetric Scans
    </p>
    <ul class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40 ltr:ml-4 ltr:lg:ml-8 rtl:lg:mr-8 rtl:mr-4 list-decimal">
        <li class="mb-2">
            Early pregnancy scan: Performed Before 10 weeks
            Evaluate different factors such as; the location of pregnancy, R/o ectopic pregnancy, viability of fetus, number of fetuses, adnexal evaluation and check for uterine anomalies.
        </li>
        <li class="mb-2">
            First trimester NT scan: 11 – 13+6 weeks
            Assessment of NT, NB and other markers, checking for any major structural abnormalities, performing dating scan, assessment of chorionicity in Twins pregnancy, combined screening with blood test.
        </li>
        <li class="mb-2">
            First trimester Uterine artery Doppler
        </li>
        <li class="mb-2">Early anomaly scan: 16+0 – 17+6 weeks Performed for Women who missed NT scan and screening for Down’s syndrome with QUAD test.</li>
        <li class="mb-2">
            Detailed Anomaly scan: 18w – 21 weeks.
            Strictly adhering to the guidelines set by the International Society of Ultrasound in Obstetrics and Gynecology (ISUOG), detect congenital abnormalities in the fetus
        </li>
        <li class="mb-2">Advanced Fetal Echocardiography: 22 weeks</li>
        <ul class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40 ltr:ml-4 rtl:mr-4 list-disc">
            <li class="mb-2">In case there is a previous child with heart diseases or in case the Mother has a history of heart disease.</li>
            <li class="mb-2">In case Mother has pre-gestational diabetic and other indications</li>
        </ul>
        <li class="mb-2"> Fetal wellbeing growth scan</li>
        <li class="mb-2">Colour Doppler study</li>
        <ul class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40 ltr:ml-4 rtl:mr-4 list-disc">
            <li class="mb-2">Evaluation of blood flow across umbilical artery, middle cerebral artery, ductous venosus etc.</li>
        </ul>
        <li class="mb-2">Customized growth charts for predicting early growth lags if any.</li>
        <li class="mb-2">Cervical assessment</li>
        <li class="mb-2">Fetal 3D & 4D scan</li>
        <li class="mb-2">Scan for other indications</li>
        <li class="mb-2">Evaluation of the FGR fetus</li>
        <li class="mb-2">Complicated Twins evaluation</li>
    </ul>
    <h3 class="font-medium text-2xl my-4">Invasive Procedures (Both diagnostic and therapeutic)</h3>
    <img src="{{ asset('images/foetal/surgery.webp')}}" alt="" class="w-full ltr:lg:pr-40 rtl:lg:pl-40 my-8">
    <ul class="flex flex-col ltr:lg:ml-8 rtl:lg:mr-4">
        <li class="list-disc mb-2 ">Chorionic Villous Sampling</li>
        <li class="list-disc mb-2 ">A form of prenatal diagnosis to ascertain chromosomal and genetic disorders in the fetus</li>
        <li class="list-disc mb-2 ">Fetal Blood Sampling (FBS)</li>
        <li class="list-disc mb-2 ">Process of collecting the fetal blood directly from the umbilical cord of fetus in order to test signs of anemia and other problems</li>
        <li class="list-disc mb-2 ">Amnioreduction</li>
        <li class="list-disc mb-2 ">A variant of amniocentesis that is performed for internally reducing amniotic fluid volume.</li>
        <li class="list-disc mb-2 ">Fetal Intrauterine Transfusion</li>
        <li class="list-disc mb-2 ">Fetal Shunt</li>
        <li class="list-disc mb-2 ">Medical procedure of inserting a hollow shunt through the mother uterus to drain fluid into the amniotic cavity.</li>
        <li class="list-disc mb-2 ">Fetal Therapeutic treatment for complicated multiple pregnancy (LASER/RFA/Cord coagulation).</li>
        <li class="list-disc mb-2 ">Other invasive procedures if any.</li>
    </ul>

    <h3 class="font-medium text-2xl my-4">Invasive Procedures (Both diagnostic and therapeutic)</h3>
    <img src="{{ asset('images/foetal/glove.webp')}}" alt="" class="w-full ltr:lg:pr-40 rtl:lg:pl-40 my-8">

    <ul class="flex flex-col ltr:lg:ml-8 rtl:lg:mr-4">
        <li class="list-disc mb-2 ">1st trimester Double marker for Aneuploidies – BhCG & PAPP-A.</li>
        <li class="list-disc mb-2 ">1st trimester Triad for Aneuploidies, Preeclampsia and Neural Tube defects.</li>
        <li class="list-disc mb-2 ">2nd trimester Quadruple test</li>
        <li class="list-disc mb-2 ">Non-invasive cell free DNA (NIPT).</li>
        <li class="list-disc mb-2 ">Parental Karyotyping</li>
        <li class="list-disc mb-2 ">Thalassemia screening</li>
        <li class="list-disc mb-2 ">Other tests if any.</li>
    </ul>


    <h3 class="font-medium text-2xl my-4">Pre-Pregnancy Counselling</h3>

    <p class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40">
        Aims at offering emotional support to couples who experience distress at the time of childbirth.
    </p>

    <h3 class="font-medium text-2xl my-4">Genetic Counselling</h3>

    <ul class="text-justify leading-8 ltr:lg:mr-40 rtl:lg:ml-40 ltr:ml-4 rtl:mr-4 ltr:lg:ml-8 rtl:lg:mr-4">
        <li class="mb-2 list-disc">Counselling offered to couples with a family history of a Genetic problem</li>
        <li class="mb-2 list-disc">Counselling offered in case of a fetus with possible Genetic Syndrome</li>
    </ul>

    <div class="mx-auto mt-10 mb-20">
        <x-doctor img='images/foetal/boban.jpg' name='Dr Boban Abraham' designation='Consultant Fetal Medicine MD, DGO, DNB, DAGE, Fellowship in Foetal Medicine' />

    </div>
</section>
<x-footer />
@endsection
