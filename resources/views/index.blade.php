<x-app-layout>
  <div class='h-screen'>
    <div class='bg-cover bg-repeat w-screen h-screen' style="background-image: url({{URL::asset('images/multi-colored-psychedelic-background.jpg')}})">  
      <!-- <div class='bg-gradient-to-r from-purple-500 to-pink-500 h-[calc(100vh-64px)] w-full'> -->
      <section class="text-white body-font">
        <div class="container px-5 py-44 mx-auto w-full">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-7xl sm:text-7xl title-font mb-4 text-white uppercase font-light">Hello Dear Customers</h1>
            <p class="text-2xl mx-auto leading-relaxed text-base font-light">we proud to see you here.</p>
          </div>
          <button class="flex mx-auto mt-16 text-purple-600 bg-white border-0 py-2 px-8 focus:outline-none hover:font-medium rounded text-lg">Start shopping</button>
        </div>
      </section>
    </div>
  </div>  
</x-app-layout>