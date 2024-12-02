<nav class="fixed top-0 flex w-full items-center justify-between z-20
  bg-AlgoBlue-100 py-2 text-white-500 hover:text-neutral-700 focus:text-neutral-700 lg:py-2"
    data-twe-navbar-ref>

    <!-- Logo container -->
    <div class="flex-none px-5">
        <a href="{{ route('home') }}">
            <img src="{{ asset('./images/logoAlgoMarineWhite.png') }}" alt="Logo" class="h-12 w-12">
        </a>
    </div>


    <div class="flex-grow flex justify-end items-center px-3">
        <div class="!visible hidden flex-grow basis-[100%] items-center justify-end lg:!flex lg:basis-auto"
            id="navbarSupportedContent2" data-twe-collapse-item>

            <ul class="list-style-none flex flex-col ps-0 lg:flex-row lg:ml-auto text-right text-white">
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
                    <a class="lg:px-2  hover:text-slate-500" href="{{ route('Teams') }}">
                        Our Team
                    </a>
                </li>
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
                    <a class="lg:px-2  hover:text-slate-500" href="{{ route('Articles') }}">
                        Articles
                    </a>
                </li>
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
                    <a class="lg:px-2  hover:text-slate-500" href="{{ route('Achievement.show') }}">
                        Achievements
                    </a>
                </li>
                <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
                    <a class="lg:px-2  hover:text-slate-500" href="{{ route('Articles') }}">
                        Stations
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
