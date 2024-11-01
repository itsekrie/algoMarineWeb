<nav
  class="relative flex w-full items-center justify-between 
  bg-AlgoBlue-100 py-2 text-white-500 hover:text-neutral-700 focus:text-neutral-700
  dark:bg-neutral-700 lg:py-4"
  data-twe-navbar-ref>
  
  <!-- Logo container -->
  <div class="flex-none px-3">
    <a href="{{route('home')}}">
      <img src="{{asset("./images/logoAlgoMarineWhite.png")}}" alt="Logo" class="h-full w-full">
    </a>
  </div>
  
  <!-- Navbar links container -->
  <div class="flex-grow flex justify-end items-center">
    <!-- Collapsible navbar container -->
    <div
      class="!visible hidden flex-grow basis-[100%] items-center justify-end lg:!flex lg:basis-auto"
      id="navbarSupportedContent2"
      data-twe-collapse-item>
      
      <!-- Navbar links -->
      <ul class="list-style-none flex flex-col ps-0 lg:flex-row lg:ml-auto text-right">
        <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2">
          <a class="text-black dark:text-white lg:px-2" href="#" aria-current="page">
            Profile
          </a>
        </li>
        <li class="mb-4 ps-2 lg:mb-0 lg:pe-1 lg:ps-0">
          <a class="" href="Teams">
            Our Team
          </a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>
