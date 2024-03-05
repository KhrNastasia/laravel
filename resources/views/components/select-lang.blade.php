<div class="flex items-center justify-center">
  <div
    x-data="{ open: false, selected: '' }"
    @click.away="open = false"
    class="relative"
  >
<button
      @click="open = !open"
      class="min-w-[180px] max-w-[180px] px-4 py-2 flex items-center justify-between"
      :class="{'text-black': selected !== '', 'text-gray-500': selected === ''}"
    >
      <span
        class="max-w-[150px] overflow-hidden text-black color-black uppercase">
        @if(isset($_COOKIE['lang']))
                  {{$_COOKIE['lang']}}
        @else
                  en
        @endif</span>
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

    <div
      x-show="open"
      class="absolute mt-2 bg-white border rounded w-full z-10"
      x-cloak
    >
<ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeLangMenu" @keydown.escape="closeLangMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700" aria-label="submenu">
                                        <li class="flex">
                                            <a class=" text-6xl items-center text-center w-full transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/?lang=ru">
                                                RU
                                            </a>
                                        </li>
                                        <li class="flex">
                                            <a class=" text-6xl items-center text-center w-full transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200" href="/?lang=en">
                                                EN
                                            </a>
                                        </li>
                                    </ul>
                                    </div>
                                    </div>
</div>