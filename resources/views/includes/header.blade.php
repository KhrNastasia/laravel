<header class='bg-white/95 z-40 supports-backdrop-blur:bg-white/60 backdrop-blurpy-4 relative shadow-md shadow-slate-700/5 dark-bg-transparent w-full'>
  <div class='max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4'>

    <div class='order-first flex'>
      <h1 class='mt-1 text-xl leading-8tracking-tight font-semibold text-slate-900 uppercase'>
      <a href="{{asset('/')}}">Some_clothes</a>  
      </h1>
    </div>

    <div class='text-center'>
      <ul class='flex inline-block space-x-4'>
        <li class='uppercase hover:underline underline-offset-2 decoration-1'>
            <a href="{{asset('catalog')}}">{{__('menu.catalog')}}</a>  
        </li>
        <li class='uppercase hover:underline underline-offset-2 decoration-1'>
        <a href="{{asset('photo')}}">{{__('menu.photo')}}</a>  
        </li>
        <li class='uppercase hover:underline underline-offset-2 decoration-1'>
            <a href="{{asset('about_us')}}">{{__('menu.about')}}</a>    
        </li>
      </ul>
    </div>

    <div class='flex text-right justify-end'>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200">
          <x-select-auth></x-select-auth>    
        </div>
    </div>
    
    <div class='flex text-right justify-end'>
        <div class="font-medium text-base text-gray-800 dark:text-gray-200">
          <x-select-lang></x-select-lang>    
        </div>
    </div>

  </div>
</header>