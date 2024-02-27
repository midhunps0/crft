@extends('frontend.app')
@section('container')

<x-header />

<section class="w-full mt-10 mb-20">
    <x-header-sub>Antenatal Care</x-header-sub>
</section>
<h1 class="text-2xl tracking-wide font-medium mb-10 lg:mx-20">
    Obstetrics, Gynecology & High Risk Pregnancy
    Recurrent pregnancy losses (RPL) (or Habitual abortion, recurrent miscarriage)
</h1>
<section class="w-full flex flex-col ltr:lg:ml-20">
    <x-image img="images/imrs.webp" />
    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">Three or more pregnancy losses.</li>
        <li class="mb-4">A common problem with approx. 15% of all clinically recognized pregnancies resulting in miscarriage.</li>
        <li class="mb-4">In about 50-75% cases of RPL happened worldwide, the causes are unexplained.</li>
        <li class="mb-4">Transvaginal ultrasonography is used as a primary method for assessing this problem.</li>
        <li class="mb-4">CRAFT adopts high-end state-of-the-art facilities and equipment to address the issue of RPL. However, the treatment methodologies recommended for this condition are still limited with extensive researches being conducted.</li>
    </ul>
    <h1 class="text-xl tracking-wide font-medium mb-10 mt-10">Gestational Hypertension or Pregnancy induced Hypertension (PIH)</h1>
    <x-image img="images/high-blood-pressure.jpg" />
    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">Onset of hypertension in pregnant patients after 20 weeks of gestation with no protein in the urine or other signs of preeclampsia.</li>
        <li class="mb-4">Increased blood pressure, edema, blurred or double vision, nausea, sudden weight gain and abdominal pain or some of the main symptoms of this condition.</li>
        <li class="mb-4">Diagnosis often is by means of blood pressure measurement.</li>
        <li class="mb-4">As treatment measure, we closely monitor the patient for rapidly identifying preeclampsia and its life threatening implications. Methyldopa, hydralazine, and labetalol etc. are the most commonly medications in case of severe pregnancy hypertension.</li>
    </ul>

    <h1 class="text-xl tracking-wide font-medium mb-10 mt-10">Diabetes in Pregnancy</h1>
    <x-image img="images/doctor-checking.jpg" />
    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">Gestational diabetes comes with no symptoms in most cases.</li>
        <li class="mb-4">Diagnosis involves a blood sugar test.</li>
        <li class="mb-4">As treatment strategies, blood sugar monitoring, healthy diet, exercise and regular monitoring of the fetus is performed.</li>
    </ul>

    <h1 class="text-xl tracking-wide font-medium mb-10 mt-10">Thyroid disorders in Pregnancy</h1>

    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">Untreated diabetes in case of mother can cause issues during pregnancy- even to the extent of miscarriages, especially during the first trimester.</li>
        <li class="mb-4">Symptoms include: Irregular heartbeat, Nervousness, Severe nausea or vomiting, Slight tremor, sleeping trouble, sudden body weight variation etc.</li>
        <li class="mb-4">As treatment methodology, in case of hyperthyroidism, antithyroid medications like propylthiouracil or PTU for the first trimester, and — if necessary, methimazole are well advised.</li>
        <li class="mb-4">As for hypothyroidism, a synthetic hormone such as levothyroxine can be administered.</li>
    </ul>

    <h1 class="text-xl tracking-wide font-medium mb-10 mt-10">Congenital/Acquired Thrombophilia</h1>
    <x-image img="images/oil-drops.jpg" />
    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">A tendency or susceptibility to develop improper blood clots.</li>
        <li class="mb-4">This susceptibility can be the resultant of genetic factors, acquired changes in the clotting mechanism, or more commonly an interaction between the genetic and acquired factors.</li>
        <li class="mb-4">Common symptoms include- hypertension, anaemia, blood in the urine, irritability, seizure, and/or cranial neuropathies, swelling with or without discolouration etc.</li>
        <li class="mb-4">Neonatal phase presents with the ideal conditions for contracting with this problem sicnce it is attributable mostly to comorbid conditions like systematic infection, central venal catheterization, and congenital cardiac disease.</li>
        <li class="mb-4">Definitive diagnosis of various forms of hereditary thrombophilia includes radiologic imaging, compression ultrasonography, MR and CT scanning with Venography etc.</li>
        <li class="mb-4">Standard treatment procedures include anticoagulant therapy in case of neonatal venous thromboembolism and antiplatelet therapy for arterial thrombosis. Warfarin is rarely feasible in infants. Conventional duration of therapy is 3 months for neonatal venous thromboembolism.</li>
    </ul>

    <h1 class="text-xl tracking-wide font-medium mb-10 mt-10">Connective tissue disorders and pregnancy</h1>
    <x-image img="images/side-view.jpg" />
    <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
        <li class="mb-4">Majorly composed of collagen and elastin, connective tissue is a structure that holds the body together.</li>
        <li class="mb-4">Connective tissue disorders (CTDs) are classified into three groups based on the disease type</li>
        <ul class="flex flex-col list-disc ltr:lg:ml-10 text-gray-600 text-justify ltr:lg:mr-40 rtl:lg:ml-40">
            <li class="mb-4">Hereditary CTDs: diseases such as Ehlers-Danlos syndrome, Marfan’s syndrome and pseudoxanthoma elasticum (PXE)</li>
            <li class="mb-4">Mixed CTDs- s combination of systemic lupus erythematosus (SLE), scleroderma, and polymyositis.</li>
        </ul>
        <li class="mb-4">Unclassified CTDs- with different disease features making them impossible to be classified as one specific disease.</li>
        <li class="mb-4">The autoimmune diseases are acquired rather than inherited but they do tend to run in families.</li>
        <li class="mb-4">The risk of fetal loss in pregnant women suffering from different forms CTDs is much higher than in general population./li>
    </ul>
</section>
<section class="w-full lg:px-10 mb-20">
    <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 lg:gap-x-10 w-full my-10 lg:px-40">
        <x-doctor img='images/subash.jpg' name='Dr. Subhash V. P' designation='Senior consultant OBS-GYN, Chief Laparoscopic Surgeon and Infertility Specialist MD, DGO' />
        <x-doctor img='images/sowdamini.jpg' name='Dr. P. R Sowdamini' designation='OBS & GYNE Specialist; Consultant Fetal Medicine MD (OBG), DGO' />

        <x-doctor img='images/alisha.jpg' name='Dr. Alisha Shafjeer' designation='Sr.Consultant in High Risk Pregnancy & Infertility MD(OBGYN), MRCOG (UK), DNB,MBB' />

    </div>

</section>
<x-footer />
@endsection
