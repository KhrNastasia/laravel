<div class="flex items-center justify-center">
  <div
    x-data="{ open: false, selected: '' }"
    @click.away="open = false"
    class="relative"
  >
    <!-- Button -->
    <button
      @click="open = !open"
      class="min-w-[180px] max-w-[180px] px-4 py-2 flex items-center justify-between"
      :class="{'text-black': selected !== '', 'text-gray-500': selected === ''}"
    >
      <span
        class="max-w-[150px] overflow-hidden text-black color-black uppercase">
        @guest
                  <p>log in</p>
        @else
                  <p>{{ Auth::user()->name }}</p>
        @endguest</span>
      <svg
        class="ml-2 w-4 h-4 color-black"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke="currentColor"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M19 9l-7 7-7-7"
        />
      </svg>
    </button>

    <!-- Dropdown Menu -->
    <div
      x-show="open"
      class="absolute mt-2 bg-white border rounded w-full z-10"
      x-cloak
    >
      <ul
        class="max-h-[140px] overflow-auto [&>li]:text-black [&>li]:px-4 [&>li]:py-2 hover:[&>li]:bg-gray-100 [&>li]:cursor-pointer"
      >
      @guest
                  <li>
                    <a href="{{asset('login')}}">LOG IN</a>
                  </li>
                  <li>
                    <a href="{{asset('register')}}">REGISTER</a>
                  </li>
        @else
                  <li>
                    <a href="{{asset('dashboard')}}">DASHBOARD</a>
                  </li>
                  <li>
                    <a href="{{asset('logout')}}">LOG OUT</a>
                  </li>
        @endguest
      </ul>
    </div>
  </div>
</div>