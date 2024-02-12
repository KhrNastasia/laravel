<header class='bg-white/95 z-40 supports-backdrop-blur:bg-white/60 backdrop-blurpy-4 relative shadow-md shadow-slate-700/5 dark-bg-transparent w-full'>
  <div class='max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4'>
    <div class='order-first flex'>
      <h1 class='mt-1 text-xl leading-8tracking-tight font-semibold text-slate-900 uppercase'>Some_clothes</h1>
    </div>
    <div class='text-center'>
      <ul class='flex inline-block space-x-4'>
        <li class='uppercase hover:underline underline-offset-2 decoration-1'>
            <a href="{{asset('catalog')}}">catalog</a>  
        </li>
        <li class='uppercase hover:underline underline-offset-2 decoration-1'>
        <a href="{{asset('photo')}}">Photo</a>  
        </li>
        <li class='uppercase hover:underline underline-offset-2 decoration-1s'>
            <a href="{{asset('about_us')}}">about</a>    
        </li>
      </ul>
    </div>
    <div class='flex text-right justify-end'>
      <p class='mt-1 text-xm leading-8tracking-tight font-semibold text-slate-900 uppercase'>
        @guest
            log in/register
        @else
            {{auth()->user()->name}}
        @endguest
        
      </p>
    </div>
  </div>
</header>