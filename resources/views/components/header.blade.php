<header id="main-header" class="w-full bg-white   transition-all duration-300 ease-in-out z-50 h-40 ">
    <div class="w-full flex justify-between pt-5 lg:z-10 transition-all duration-300 ease-in-out">
        <div class="mt-2">
            <img src="{{asset('icons/logo.png')}}" alt="" class="w-16 md:w-20 lg:w-20">
        </div>
        <div class="lg:z-10 relative  transition-opacity duration-300 ease-in-out font-nav font-normal">
            <a href="#" id="menu-icon" class="lg:hidden  text-2xl cursor-pointer p-4 z-10 transition-opacity duration-300 ease-in-out">
                <i class="ri-menu-4-line"></i>
            </a>
            <div class="flex flex-col z-40 h-full lg:relative lg:bg-opacity-0 bg-gray-200  lg:text-gray-800   transition-all duration-300 ease-in-out" id="nav-items">
                <a href="#" id="close-icon" class="lg:hidden  lg:relative  cursor-pointer text-2xl ltr:ml-56 rtl:ml-0 rtl:mr-56 transition-opacity duration-300 ease-in-out">
                    <i class="ri-close-line"></i>
                </a>
                <ul class="flex flex-row lg:justify-end items-center text-gray-800 nav-links justify-start space-x-4 text-xs">
                    <li class="hover:text-pink-400 transition-all duration-300 ease-in-out"><i class="fa-solid fa-phone-volume"></i> <span>+91 8590462565</span></li>
                    <li class="hover:text-pink-400 transition-all duration-300 ease-in-out"><i class="fa-solid fa-globe"></i><span>International Patients</span></li>
                </ul>
                <ul class="flex flex-col lg:flex-row justify-start lg:justify-end items-start lg:mt-6 text-gray-800 pt-10 lg:pt-0 nav-links lg:pb-0 space-x-8">
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out   text-sm font-normal pb-4 lg:pb-0"><a href="{{ route('home') }}" class=""><span class="mr-1">Home</span></a></li>
                    <li class="  text-sm font-normal pb-4 lg:pb-0 relative group">
                        <a href="#" class=""><span class="mr-1">About Us</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:flex hidden flex-col justify-center items-center w-56 py-4 bg-white shadow-xl absolute  z-10">
                            <li class=" text-sm font-normal pb-4 "><a href="{{ route('about') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">About CRAFT</a></li>
                            <li class=" text-sm font-normal pb-4 "><a href="{{ route('chairman') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">Message from Chairman</a></li>
                            <li class="text-sm font-normal pb-4 "><a href="{{ route('international-patients') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">International Patients</a></li>
                            <li class=" text-sm font-normal pb-4 "><a href="{{ route('achivements') }}" class="hover:text-pink-400  transition-all duration-300 ease-in-out">Our Achievments</a></li>
                        </ul>
                    </li>
                    <li class=" text-sm font-normal pb-4 lg:pb-0 relative group ">
                        <a href="#" class=""><span class="mr-1">I'm Looking For</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:grid lg:grid-cols-3 grid-cols-2 w-80 md:w-[40rem] sm:w-[40rem] sm:px-8 md:px-8 px-2  lg:gap-4 lg:w-[44rem] py-4 bg-white shadow-xl absolute hidden z-10 lg:p-8">
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('female-fertility') }}">Female Fertility</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('male-fertility') }}">Male Fertility</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="">IVF Lab and Embriology</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('sperm-embrio-freezing') }}">Sperm and Embrio Freezing</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('medical-genetics') }}">Medical Genetics</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="">Reproduction Surgery</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('antenatal-care') }}">Antenatal Care</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="{{ route('foetal-medicine') }}">Foetal Medicine</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4"><a href="">Painless Labour</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="{{ route('neonate-and-pediatric-care') }}">Neonate and Pediatric care</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="{{ route('assisting-departments') }}">Assisting Departments</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="">Accormation at CRAFT</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="{{ route('medical-insurance') }}">Medical Insurance</a></li>
                        </ul>
                    </li>
                    <li class=" text-sm font-normal pb-4 lg:pb-0 relative group">
                        <a href="" class=""><span class="mr-1">Patient Guide</span><i class="fa-solid fa-caret-down"></i></a>
                        <ul class="group-hover:flex flex-col justify-center items-center w-56 py-4 bg-white shadow-xl absolute hidden z-10">
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="">About CRAFT</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="">Message from Chairman</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="">International Patients</a></li>
                            <li class="hover:text-pink-400  transition-all duration-300 ease-in-out text-sm font-normal pb-4 "><a href="">Our Achievments</a></li>
                        </ul>
                    </li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out  text-sm font-normal pb-4 lg:pb-0"><a href="">Training Courses</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out  text-sm font-normal pb-4 lg:pb-0"><a href="">Conatct Us</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out  text-sm font-normal pb-4 lg:pb-0"><a href="">EBooks</a></li>
                    <li class="hover:text-pink-400  transition-all duration-300 ease-in-out  text-sm font-normal pb-4 lg:pb-0 ltr:text-right rtl:text-left"><a href="">Blogs</a></li>
                </ul>
            </div>


        </div>
    </div>
</header>
