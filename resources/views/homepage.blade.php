@extends('layouts.app')

@section('title')
    {{$title}}
@endsection


@section('head')
    <script src="https://kit.fontawesome.com/dc88ec6997.js" crossorigin="anonymous"></script>
@endsection

@section('content')

<section class="h-screen">
    <div class="flex flex-col lg:flex-row h-full items-center justify-center lg:justify-start px-24 sm:px-40 md:px-28 relative bg-main-bg gap-x-4" style="background-image: url('{{ asset('image/jumbotron_background.svg') }}'); background-size: cover; background-position: center;">
        <div class="flex-col text-white pt-28 z-10 font-oswald text-center lg:text-left">
            <p class="text-6xl sm:text-7.5xl xl:text-9.5xl font-bold tracking-tight">
                ALGOMARINE
            </p>
            <p class="text-base sm:text-xl xl:text-3xl tracking-wider">
                Your Solution To Reach Marine Perfectness
            </p>
        </div>
        <div class="w-full">
            <img src="{{ asset('image/nelayan.svg') }}" alt="nelayan" class="w-full md:w-3/4 lg:w-full mx-auto animate-wiggle">
        </div>
    </div>
</section>


<section class="h-full my-36 mx-12 sm:mx-24 md:mx-36 lg:mx-64 xl:mx-80 xl:px-32">
    <div class="flex justify-center font-montserrat">
        <div class="flex flex-col items-center">
            <h1 class="text-4xl font-oswald underline text-main-bg">
                What's Algomarine?
            </h1>
            <p class="mt-4 font-thin text-justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi nemo veritatis illo explicabo sequi 
                praesentium. Non sit quisquam eius aspernatur dolorem, nihil, perferendis ducimus dolore praesentium modi reiciendis id 
                recusandae dolor! Autem, nobis libero? Temporibus voluptatem ipsam accusantium, vero rerum sequi maxime expedita atque 
                ratione id perferendis deleniti, ipsa saepe sapiente nesciunt. Molestiae fuga sint excepturi ab, nihil modi iusto dicta 
                sunt voluptatibus corrupti quod reprehenderit est esse velit similique amet exercitationem vel minus consequuntur voluptas 
                aliquid cupiditate provident dolor temporibus! Rem voluptatum eos quis non illo. Esse necessitatibus magni veniam doloribus? 
                Architecto animi eos consequatur repellendus nesciunt inventore voluptates quae assumenda similique. Amet officia saepe ratione
                enim deserunt culpa et eveniet necessitatibus quae reiciendis cum dignissimos, atque cupiditate eum, suscipit consequuntur minima
                soluta alias, omnis harum nobis. Nostrum enim assumenda reprehenderit et. Harum, tempora inventore. Omnis quis officiis, exercitationem,
                necessitatibus quam ex, soluta possimus dolore nihil laboriosam nam alias!
            </p>
        </div>
    </div>
</section>

<section class="h-full">
    <div class="flex h-full mx-auto px-4 max-w-xs sm:px-16 sm:max-w-lg md:px-32 md:max-w-2xl lg:px-0 lg:max-w-full lg:mx-60 xl:mx-80 my-52 font-montserrat items-center justify-center">
        <div class="lg:flex lg:flex-row items-center justify-center gap-x-8 hidden lg:visible">
            <div class="flex-col w-full space-y-3">
                <p class="lg:text-5xl xl:text-6xl font-oswald font-bold tracking-tight text-main-bg">
                    Who's Algomarine?
                </p>
                <div class="pt-2">
                    <p class="lg:text-lg xl:text-xl font-extrabold ">
                        Ikhsan Mustaqim
                    </p>
                    <p class="lg:text-lg xl:text-xl font-semibold ">
                        Chief Executive Officer
                    </p>
                    <p class="lg:text-sm xl:text-base tracking-wide text-gray-800">
                        "Algomarine Is Us, Team With High Dedication In Tech To Develop and Explore Our Capability"
                    </p>
                    <button class="w-full bg-main-bg text-white border-main-bg border-2 rounded-xl mt-4 py-1 font-semibold hover:scale-105 ease-in-out duration-300">
                        See More!
                    </button>
                </div>
            </div>
            <div class="flex aspect-square justify-center items-end bg-main-bg rounded-full">
                <img src="{{ asset('image/tes.png') }}" alt="ikhsan_mustaqim" class="object-fill max-w-full h-auto rounded-full">
            </div>
        </div>
        <div class="flex flex-row items-center justify-center gap-x-8 lg:hidden">
            <div class="flex-col w-full space-y-8">
                <p class="text-4xl md:text-5xl lg:text-5xl xl:text-6xl text-center font-oswald font-bold tracking-tight text-main-bg">
                    Who's Algomarine?
                </p>
                <div class="flex aspect-square max-w- justify-center items-end bg-main-bg rounded-full">
                    <img src="{{ asset('image/tes.png') }}" alt="ikhsan_mustaqim" class="object-fill max-w-full h-auto rounded-full">
                </div>
                <div class="pt-2">
                    <p class="md:text-xl lg:text-lg xl:text-xl font-extrabold ">
                        Ikhsan Mustaqim
                    </p>
                    <p class="md:text-xl lg:text-lg xl:text-xl font-semibold ">
                        Chief Executive Officer
                    </p>
                    <p class="lg:text-sm xl:text-base tracking-wide text-gray-800">
                        "Algomarine Is Us, Team With High Dedication In Tech To Develop and Explore Our Capability"
                    </p>
                    <button class="w-full bg-main-bg text-white border-main-bg border-2 rounded-xl mt-4 py-1 font-semibold hover:scale-105 ease-in-out duration-300">
                        See More!
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-screen" style="background-image: url('{{ asset('image/background-2.svg') }}'); background-size: cover; background-position: center;">
    <div class="flex h-full font-oswald text-white px-20 sm:px-10 md:px-20 lg:px-40 xl:px-80 py-44">
        <div class="flex flex-col items-center justify-center space-y-16 w-full">
            <div class="text-center">
                <p class="text-4xl sm:text-5xl xl:text-6xl font-bold tracking-wider text-white uppercase">
                    Our Projects
                </p>
            </div>
            <div class="space-x-8 w-full max-w-lg lg:max-w-4xl items-center justify-center">
                <div id="carouselExampleControls" class="relative" data-twe-carousel-init data-twe-ride="carousel">
                <!--Carousel items-->
                    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                        <!--First item-->
                        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-twe-carousel-item data-twe-carousel-active>
                            <a href="" class="flex justify-center items-end group bg-white w-full h-96 rounded-xl overflow-hidden" style="background-image: url('{{ asset('image/tambakrejo.jpg') }}'); background-size: cover; background-position: center;">
                                <!-- Content here -->
                                <div class="flex justify-center items-center h-1/4 w-full bg-black bg-opacity-45 group-hover:h-full ease-in-out duration-300">
                                    <p class="font-montserrat+">
                                        Stasiun Tambakrejo
                                    </p>
                                </div>
                            </a>
                        </div>
                        <!--Second item-->
                        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-twe-carousel-item>
                            <a href="" class="flex justify-center items-end group bg-white w-full h-96 rounded-xl overflow-hidden" style="background-image: url('{{ asset('image/demak.jpg') }}'); background-size: cover; background-position: center;">
                                <!-- Content here -->
                                <div class="flex justify-center items-center h-1/4 w-full bg-black bg-opacity-45 group-hover:h-full ease-in-out duration-300">
                                    <p class="font-montserrat+">
                                        Stasiun Demak
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
            
                    <!--Carousel controls - prev item-->
                    <button class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleControls" data-twe-slide="prev">
                        <span class="inline-block h-8 w-8">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                        </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">
                            Previous
                        </span>
                    </button>
                    <!--Carousel controls - next item-->
                    <button class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-twe-target="#carouselExampleControls" data-twe-slide="next">
                        <span class="inline-block h-8 w-8">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                            </svg>
                        </span>
                        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">
                            Next
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-full sm:h-screen">
    <div class="px-8 sm:px-9 md:px-16 lg:px-32 xl:px-64 py-24 h-full">
        <div class="flex flex-col h-full space-y-4">
            <h1 class="font-oswald text-6xl text-main-bg">
                Our Activities
            </h1>
            <div class="flex flex-col sm:flex-row w-full h-full">
                <a href="" class="flex items-end h-64 w-full sm:h-full bg-black hover:brightness-75" style="background-image: url('{{ asset('image/tes-1.jpeg') }}'); background-size: cover; background-position: center;">
                    <div class="flex justify-start items-center px-8 h-1/5 w-full bg-black bg-opacity-45 group-hover:h-full ease-in-out duration-300">
                        <p class="font-montserrat text-white font-semibold tracking-wider">
                            Algomarine Nyanyi APT APT
                        </p>
                    </div>
                </a>
                <div class="flex flex-col w-full h-full">
                    <a href="" class="flex items-end h-64 sm:h-full bg-slate-700 hover:brightness-75" style="background-image: url('{{ asset('image/tes-2.jpeg') }}'); background-size: cover; background-position: center;">
                        <div class="flex justify-start items-center px-8 h-1/3 w-full bg-black bg-opacity-45 group-hover:h-full ease-in-out duration-300">
                            <p class="font-montserrat text-white font-semibold tracking-wider">
                                Algomarine Nonton Konser JKT48
                            </p>
                        </div>
                    </a>
                    <a href="" class="flex items-end h-64 sm:h-full bg-violet-400 hover:brightness-75" style="background-image: url('{{ asset('image/tes-4.jpg') }}'); background-size: cover; background-position: center;">
                        <div class="flex justify-start items-center px-8 h-1/3 w-full bg-black bg-opacity-45 group-hover:h-full ease-in-out duration-300">
                            <p class="font-montserrat text-white font-semibold tracking-wider">
                                Algomarine Diculik Presiden!!
                            </p>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
    



