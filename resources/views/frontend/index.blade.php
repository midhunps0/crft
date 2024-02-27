@extends('frontend.app')
@section('container')



{{-- <div class="relative ltr:hidden">
    <div class="absolute top-0 left-0 pl-[15rem] pr-40 py-80 bg-gray-200 bottom-40 lg:py-16 lg:px-56  "></div>
    <div class="relative lg:absolute left-0  lg:right-[77rem] bg-gray-200 lg:top-32 lg:py-[24rem]"></div>
    <div class="relative lg:absolute left-0 right-[57rem]  lg:p-20 lg:right-[57rem] bg-gray-200 lg:top-[55rem] lg:py-16"></div>
</div> --}}



<section class="relative lg:px-20 w-full pb-16">
    <x-header />
    <div class="absolute top-0 bottom-0 left-0 right-0 overflow-visible">
        <div class="absolute top-0 ltr:right-36 rtl:left-36 w-96 bg-gray-200 h-36 z-0"></div>
        <div class="absolute top-0 ltr:right-0 rtl:left-0 w-36 bottom-0 bg-gray-200"></div>
        <div class="absolute bottom-0 ltr:right-36 rtl:left-36 h-36 w-96 bg-gray-200"></div>
    </div>
    <div class="flex lg:justify-between justify-center items-center pr-24 flex-col-reverse lg:flex-row">
        <div class="p-10 relative font-headings">
            <div class="relative mt-16 lg:bg-none lg:bg-opacity-0 bg-slate-800 py-8">
                <h1 class="text-3xl lg:text-5xl tracking-wide pb-2">The <span class="text-pink-400">Most Trusted </span>Hospital</h1>
                <h1 class="text-3xl lg:text-4xl tracking-wide">For<span class="text-craft-blue pl-1">Infertility Treatment</span></h1>
                </h1>
            </div>

            <div class="mt-4 flex space-x-8">
                <button class="text-white bg-craft-blue rounded-full w-56 shadow-lg p-2">Book An Appoinment <i class="fa-solid fa-calendar-days text-lg"></i></button>
                <button class="text-white bg-pink-400  rounded-full w-56 shadow-lg p-2">Chat With Us <i class="fa-brands fa-whatsapp text-lg"></i></button>
            </div>
            <p class="mt-10 font-bold mb-2 text-center lg:text-left">Feel Free To Call Us Any Time</p>
            <div class="flex justify-center items-center lg:mb-10 mt-4 lg:justify-start">
                <i class="fa-solid fa-phone-volume "></i> <span class="ml-2 ">+91 8590462565</span>
            </div>

            <div class="flex text-pink-600 text-xl tracking-wide justify-center items-center mt-4 lg:justify-start">
                <p class="ltr:pr-4 ltr:border-r-2 border-pink-400 rtl:pl-4">Kochi</p>
                <p class="pl-2 rtl:pr-4 rtl:border-r-2 border-pink-400">Kodungallur</p>
            </div>

        </div>
        <div class="px-10 lg:p-0 w-[32rem]">
            <img src="{{asset('images/baby.jpg')}}" alt="" class="shadow-xl mt-4">
        </div>
    </div>
    <div class="">
        <h1 class="text-center text-pink-400 my-10"><span class="font-bold">55,000</span> little angels & counting...</h1>
        <div class="flex justify-center items-center lg:px-20 ltr:flex-row rtl:flex-row-reverse">
            <x-littile-angels count="14,000" treatment="IVF-ICFSI" class="lg:mr-20 mr-2 rtl:lg:z-10" />
            <x-littile-angels count="3800" treatment="MTESE-TESA ICSI" class="lg:mr-20 mr-2" />
            <x-littile-angels count="500" treatment="PGS/PGD" class="lg:mr-10 ltr:lg:z-10" />
        </div>
    </div>
</section>
<section class="w-full mt-10 lg:mt-24 mb-10 pb-10">
    <h1 class="capitalize text-center text-gray-600 lg:text-3xl my-10">What Our Patients Are Saying</h1>
    <div class="flex justify-start items-center ltr:ml-4 my-2 pl-20 rtl:mb-10 rtl:mr-4">
        <img src="{{asset('icons/google.png')}}" class="h-8 p-1 bg-white shadow-xl rounded-full lg:h-10 lg:rounded-3xl lg:p-2">
        <h1 class="text-gray-600 lg:text-xl">Reviews</h1>
    </div>
    <div class="w-full flex relative px-10 lg:px-20 animate-display duration-10s infinite" id="review-container">
        <x-review class="w-full lg:w-1/3 lg:mr-10 review animate-display duration-10s infinite" name="Sony Thuruthel" review="I can't believe I'm finally writing this review. After years of disappointment and heartache, we found the infertility hospital that changed our lives. The staff here are true miracle workers! From the compassionate nurses to the knowledgeable doctors, everyone played a crucial role in our journey to parenthood. We are now expecting our first child, and we owe it all to this incredible hospital. Thank you from the bottom of our hearts!" />

        <x-review class="w-full lg:w-1/3 lg:mr-10 lg:flex lg:flex-col hidden  review animate-display duration-10s infinite" name="Pranav Kumar" review="Craft Infertility Hospital played a crucial role in crafting our path to parenthood. The dedicated and knowledgeable staff guided us through the process with patience and expertise. The facility is equipped with the latest technology, and the warm ambiance made us feel at ease. While the journey had its challenges, the support we received made all the difference." />

        <x-review class="w-full lg:w-1/3 lg:mr-10 lg:flex lg:flex-col hidden    review animate-display duration-10s infinite" name="Anjali Radhakrishnan" review="Our experience at this infertility hospital was marked by a sense of hope and support. The doctors were thorough in their assessments and tailored a treatment plan just for us. The emotional rollercoaster of infertility is tough, but the staff here made us feel understood and cared for. While the road was challenging, we are grateful for the ray of hope this hospital provided. We are now cautiously optimistic about the future." />

        <x-review class="w-full lg:w-1/3 hidden review animate-display duration-10s infinite" name="Abhinav Gopalakrishnan" review="Craft Infertility Hospital is a masterpiece in the world of fertility treatment. The skilled artisans (doctors) and their support team meticulously crafted a plan that addressed our unique needs. The attention to detail, coupled with a compassionate approach, made the entire experience positive. We are forever grateful to Craft Infertility Hospital for crafting our family's beautiful masterpiece." />

        <x-review class="w-full lg:w-1/3 hidden review animate-display duration-10s infinite" name="Shreya Unnikrishnan" review="Infertility is a difficult journey, and this hospital made us feel like we were not alone. The support groups and counseling sessions offered a safe space to share our struggles. The doctors were patient in explaining each step of the treatment, and the personalized approach made us feel seen and heard. Though the road to success had its challenges, we appreciate the hospital's commitment to helping us navigate this journey together." />

        <a href="" id="prev" class="absolute left-4 lg:left-10 top-40"><i class="ri-arrow-left-s-line text-2xl bg-gray-400 text-white shadow-xl p-1 rounded-full "></i></a>
        <a href="" id="next" class="absolute right-4  lg:right-10 top-40"><i class="ri-arrow-right-s-line text-2xl bg-gray-400 text-white shadow-xl p-1 rounded-full"></i></a>
    </div>
    <div class=" w-full flex flex-row justify-center">
    <x-review-button/></div>


</section>
<section class="w-full my-16 flex flex-row items-center justify-center relative">
    <div class="bg-gray-200 absolute left-0 top-0 bottom-0 w-1/2 -z-10"></div>
    <div class="w-full flex flex-row px-10 lg:px-20">
        <div class="w-1/2 h-[38rem] lg:h-[30rem] py-20 lg:py-40">
            <h1 class=" text-2xl lg:text-4xl mb-4 text-gray-600">Video Testimonials</h1>
            <p class="mb-4 lg:text-xl text-gray-500">Our patients are our best advocates,hear the inspiring stories of their treatment journey</p>
            <x-review-button />
        </div>
        <div class="w-1/2 flex flex-row items-center relative py-24">
            <div class="bg-gray-200 absolute left-0 top-0 bottom-0 w-1/2 -z-10"></div>
            <div class="w-full mb-2 flex flex-col justify-center">
                <iframe width="300" height="250" class="lg:w-[640px] lg:h-[360px] shadow-md bottom-20 video" src="https://www.youtube.com/embed/bTMg4kQoaHI?si=HcFBS5ApinwFrT1J" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>

                {{-- <iframe width="300" height="250" class="absolute rtl:-right-20 ltr:right-0 lg:right-20 lg:w-[500px] lg:h-[300px] shadow-md bottom-20 hidden video" src="https://www.youtube.com/embed/RXCGT7SnhVU?si=NBXIdqHe7FXI1T1s&amp;start=60" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe>

                <iframe width="300" height="250" class="absolute rtl:-right-20 ltr:right-0 lg:right-20 lg:w-[500px] lg:h-[300px] shadow-md bottom-20 hidden video" src="https://www.youtube.com/embed/Yi3XOFqc9_k?si=Wm1ARjPZUrOUKOtP&amp;start=100" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;" allowfullscreen></iframe> --}}
            </div>
            <div class="flex flex-row space-x-2 items-center justify-center absolute bottom-14 z-10 w-full">
                <a href="" id="prevVideo"><i class="ri-arrow-left-s-line text-xl bg-gray-400 text-white shadow-xl p-1 rounded-full "></i></a>
                <a href="" id="nextVideo"><i class="ri-arrow-right-s-line text-xl bg-gray-400 text-white shadow-xl p-1 rounded-full"></i></a>
            </div>
        </div>
    </div>
    </div>
</section>
<section class="my-4 relative w-full">
    <h1 class="capitalize text-gray-700 flex justify-center items-center text-xl lg:mb-10 lg:text-3xl pl-2">Why is your IVF cycle at Craft most likely to be successful?</h1>
    <div class="lg:grid lg:grid-cols-2 lg:gap-x-20 relative">

        <div class="lg:grid lg:grid-cols-2 relative lg:absolute lg:left-32 lg:top-4">
            <x-policy class="tech lg:h-44 " img="icons/sperm.png" policy="100% non-donor policy" content="Craft Infertility Hospital, renowned for its commitment to excellence, proudly upholds a 100% non-donor policy. This policy ensures that every assisted reproductive procedure, including cutting-edge technologies like in vitro fertilization (IVF), is conducted exclusively using the genetic material of the intended parents. Respecting patient privacy and autonomy, Craft Infertility Hospital stands as a beacon of personalized, ethical, and comprehensive care, empowering individuals and couples on their unique fertility journeys."></x-policy>

            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/individual.png" policy="Individualized treatment Protocol" content="At Craft Infertility Hospital, our 'Individualized Treatment Protocol' sets the standard for personalized fertility care. Tailored to the unique needs of each patient, this approach maximizes success while providing empathetic support on the path to parenthood."></x-policy>
        </div>

        <div class="lg:grid lg:grid-cols-2 relative lg:absolute lg:right-32 lg:top-4">
            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/injection.png" policy="Best in class stimulations injections" content="Our 'Best-in-Class Stimulation Injections' epitomize excellence in fertility care. Meticulously selected for optimal efficacy, these injections represent our commitment to providing cutting-edge solutions for successful fertility treatments."></x-policy>

            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/technology.png" policy="Best in class Technology to assure you 100% own baby" content="Craft Infertility Hospital stands at the forefront of fertility care, offering 'Best-in-Class Technology' to ensure you achieve the dream of having a 100% genetically related baby. Our state-of-the-art technologies represent the pinnacle of innovation, providing you with advanced and effective solutions on your journey to parenthood. Trust Craft Infertility Hospital for the assurance of cutting-edge technology and the expertise needed to make your dream of having your biological child a reality."></x-policy>
        </div>

        <div class="middle  bg-opacity-20 px-10 shadow-md lg:col-span-2 hidden lg:flex lg:flex-col py-20 w-[32rem] mx-auto">
            <div class=" lg:flex justify-center items-center px-10l ">
                <img src="{{asset('icons/sperm.png')}}" alt="" class="h-16 mr-1 lg:h-10 lg:mt-2">
                <h1 class="text-gray-600 font-bold lg:text-center text-xl">100% non-donor policy</h1>
            </div>
            <p class="mt-10 text-gray-500 tracking-wider">
                Craft Infertility Hospital is committed to a 100% non-donor policy,
                ensuring that all assisted reproductive procedures, including in vitro fertilization (IVF),
                are conducted without the involvement of third-party gametes. Our unwavering dedication to this
                policy reflects our respect for the privacy and autonomy of our patients, as we strive to assist
                them on their fertility journey using their own genetic material. At Craft Infertility Hospital,
                we believe in providing personalized, ethical, and comprehensive care to every individual or couple seeking fertility treatments,
                maintaining the highest standards of medical excellence and integrity in reproductive healthcare.
            </p>
        </div>

        <div class="lg:grid lg:grid-cols-2 relative lg:absolute lg:left-32 lg:bottom-4">
            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/doctor.png" policy="Blessed hands of few skilled doctors" content="Experience the expertise and compassion in the 'Blessed Hands of Skilled Doctors.' Our dedicated team is committed to guiding you through personalized and effective fertility treatments, ensuring the best care on your journey to parenthood."></x-policy>

            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/tube.png" policy="Surgical sperm retrieval through M-TESA" content="Craft Infertility Hospital offers Surgical Sperm Retrieval through M-TESA as a specialized procedure for overcoming male fertility challenges. M-TESA (Microsurgical Testicular Sperm Extraction) is a precise and advanced technique performed by our expert medical team. "></x-policy>
        </div>

        <div class="lg:grid lg:grid-cols-2 relative lg:absolute lg:right-32 lg:bottom-4">
            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/hope.png" policy="PGT-M: A ray of hope for couples with genetic diseases" content="Specialized service that offers a beacon of optimism. Preimplantation Genetic Testing for Monogenic/Single Gene Disorders (PGT-M) allows us to screen embryos for specific genetic conditions. This advanced technology empowers couples with the knowledge and options needed to make informed decisions, reducing the risk of passing genetic disorders to future generations. "></x-policy>

            <x-policy class="hidden lg:h-44 tech lg:flex" img="icons/emi.png" policy="0% EMI for all fertility treatments" content="Our commitment to accessible fertility care is reflected in this offering, allowing individuals and couples to embark on their parenthood journey without financial barriers. With Craft, you can avail of fertility treatments through convenient and affordable EMI options, ensuring that financial considerations do not hinder your dream of building a family. "></x-policy>
        </div>

    </div>



    <a href="" id="prevTech" class="absolute left-12 lg:left-10 bottom-0 lg:hidden"><i class="ri-arrow-left-s-line text-xl bg-gray-400 text-white shadow-xl p-1 rounded-full "></i></a>
    <a href="" id="nextTech" class="absolute right-12  lg:right-80 bottom-0 lg:hidden"><i class="ri-arrow-right-s-line text-xl bg-gray-400 text-white shadow-xl p-1 rounded-full"></i></a>
</section>
<section class="my-10 w-full lg:p-20 py-10 px-4 flex justify-between items-center relative lg:flex-row flex-col">
    <div class="lg:w-1/4 lg:mr-10 w-full">
        <h1 class="capitalize text-gary-600 lg:text-3xl  mb-4 text-xl text-center">Our certified and experienced doctors</h1>
        <x-review-button class="lg:relative absolute -bottom-4 ltr:left-32 rtl:right-10" />
        <a href="" id="prevTech" class="absolute left-80 lg:left-[75rem]  ltr:-bottom-4 rtl:bottom-32"><i class="ri-arrow-left-s-line text-2xl bg-blue-700 text-white shadow-xl p-2 rounded-3xl "></i></a>
    <a href="" id="nextTech" class="absolute right-28  lg:right-20 ltr:-bottom-4  rtl:bottom-32 "><i class="ri-arrow-right-s-line text-2xl bg-blue-700 text-white shadow-xl p-2 rounded-3xl"></i></a>
    </div>
    <div class="flex justify-between items-center relative">
        <div class="bg-white shadow lg:mr-10 lg:flex lg:flex-col w-60 ">
            <h1 class="text-gray-700 lg:text-xl p-4">Dr. C Muhammed Ashraf</h1>
            <div class="relative flex flex-row justify-end w-full">
                <img src="{{asset('images/ashraf.png')}}" alt="" class="h-56">
                <div class="flex flex-col absolute bottom-4 left-2">
                    <p class="text-xs text-gray-300 -rotate-90 origin-bottom-left absolute w-32 left-6 bottom-10">Craft IVF Hospital</p>
                    <img src="{{asset('icons/info.png')}}" alt="" class="h-8 w-8 rounded">
                </div>
            </div>
            <div class="bg-gray-700 text-white flex flex-col justify-center items-center py-3 text-xs leading-6">
                <p>Chairman & Medical Director</p>
                <p>MD, DGO, DPS (GERMANY)</p>
            </div>
        </div>

        <div class="bg-white shadow lg:mr-10 lg:flex lg:flex-col w-60 ">
            <h1 class="text-gray-700 lg:text-xl p-4">Dr. C Muhammed Ashraf</h1>
            <div class="relative flex flex-row justify-end w-full">
                <img src="{{asset('images/ashraf.png')}}" alt="" class="h-56">
                <div class="flex flex-col absolute bottom-4 left-2">
                    <p class="text-xs text-gray-300 -rotate-90 origin-bottom-left absolute w-32 left-6 bottom-10">Craft IVF Hospital</p>
                    <img src="{{asset('icons/info.png')}}" alt="" class="h-8 w-8 rounded">
                </div>
            </div>
            <div class="bg-gray-700 text-white flex flex-col justify-center items-center py-3 text-xs leading-6">
                <p>Chairman & Medical Director</p>
                <p>MD, DGO, DPS (GERMANY)</p>
            </div>
        </div>

        <div class="bg-white shadow lg:mr-10 lg:flex lg:flex-col w-60 ">
            <h1 class="text-gray-700 lg:text-xl p-4">Dr. C Muhammed Ashraf</h1>
            <div class="relative flex flex-row justify-end w-full">
                <img src="{{asset('images/ashraf.png')}}" alt="" class="h-56">
                <div class="flex flex-col absolute bottom-4 left-2">
                    <p class="text-xs text-gray-300 -rotate-90 origin-bottom-left absolute w-32 left-6 bottom-10">Craft IVF Hospital</p>
                    <img src="{{asset('icons/info.png')}}" alt="" class="h-8 w-8 rounded">
                </div>
            </div>
            <div class="bg-gray-700 text-white flex flex-col justify-center items-center py-3 text-xs leading-6">
                <p>Chairman & Medical Director</p>
                <p>MD, DGO, DPS (GERMANY)</p>
            </div>
        </div>

    </div>

</section>

<section class="w-full">
    <div class="relative">
        <div class="bg-gray-300 absolute left-0 top-0  px-10 py-60 lg:px-20 lg:pt-60 lg:pb-80"></div>
        <div class="capitalize tracking-wide text-gray-500 text-xl absolute left-10 lg:left-20 lg:top-16 lg:font-medium lg:text-3xl top-4">News And Announcements</div>
    </div>
    <div class="flex justify-center items-center relative ltr:flex-row rtl:flex-row-reverse">
        <div class="flex flex-col justify-center items-center lg:flex-row lg:justify-between mt-20 ml-4 relative lg:mt-32 ">
            <div class="flex justify-center items-center flex-col p-10 bg-white shadow-lg">
                <img src="{{ asset('images/news1.png') }}" alt="">
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
            </div>
            <div class="hidden lg:flex justify-center items-center flex-col p-10 bg-white shadow-lg">
                <img src="{{ asset('images/news2.png') }}" alt="">
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
            </div>
            <div class="hidden lg:flex justify-center items-center flex-col p-10 bg-white shadow-lg">
                <img src="{{ asset('images/news1.png') }}" alt="">
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
            </div>
            <div class="hidden justify-center items-center flex-col p-10 bg-white shadow-lg">
                <img src="{{ asset('images/news2.png') }}" alt="">
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
            </div>
            <div class="hidden justify-center items-center flex-col p-10 bg-white shadow-lg">
                <img src="{{ asset('images/news1.png') }}" alt="">
                <p class="">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,</p>
            </div>
            <x-left-arrow id="prevNews" class="top-20 left-4 text-9xl text-white" />
            <x-right-arrow id="nextNews" class="top-20 right-4 text-9xl text-white" />
        </div>
        <x-review-button class="absolute right-4 -bottom-16" />
    </div>
</section>
<section class="flex flex-col justify-center items-center my-12 lg:my-20 w-full">
    <h1 class="text-gray-600 text-xl tracking-wide lg:text-3xl">Our Blogs</h1>
    <div class="flex justify-center items-center my-10 relative lg:px-20 lg:py-4 ltr:flex-row rtl:flex-row-reverse">
        <div class="flex flex-col justify-center items-center bg-white shadow-lg p-4 relative lg:mr-10">
            <img src="{{ asset('images/blog.jpg') }}" alt="">
            <p class="mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="flex justify-center items-center absolute right-2 bottom-2">
                <a href="" class=" text-pink-400">Read<i class="ri-arrow-right-line transition-transform duration-300 ease-in-out transform translate-x-0 hover:translate-x-2 ml-2"></i></a>
            </div>
        </div>

        <div class="lg:mr-10 hidden lg:flex flex-col justify-center items-center bg-white shadow-lg p-4 relative">
            <img src="{{ asset('images/blog.jpg') }}" alt="">
            <p class="mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="flex justify-center items-center absolute right-2 bottom-2">
                <a href="" class=" text-pink-400">Read<i class="ri-arrow-right-line transition-transform duration-300 ease-in-out transform translate-x-0 hover:translate-x-2 ml-2"></i></a>
            </div>
        </div>

        <div class="hidden lg:flex flex-col justify-center items-center bg-white shadow-lg p-4 relative">
            <img src="{{ asset('images/blog.jpg') }}" alt="">
            <p class="mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="flex justify-center items-center absolute right-2 bottom-2">
                <a href="" class=" text-pink-400">Read<i class="ri-arrow-right-line transition-transform duration-300 ease-in-out transform translate-x-0 hover:translate-x-2 ml-2"></i></a>
            </div>
        </div>

        <x-review-button class="left-2 absolute -bottom-16 lg:left-[75rem]" />

        <x-left-arrow id="prevNews" class="lg:hidden absolute -bottom-16 right-20 text-lg text-white bg-blue-700 shadow p-1 " />
        <x-right-arrow id="nextNews" class="lg:hidden absolute -bottom-16 right-4 text-lg text-white bg-blue-700 shadow p-1" />



    </div>
</section>


<x-footer />
@endsection
