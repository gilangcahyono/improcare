<nav class="fixed top-0 z-50 w-full border-b border-gray-200 bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
          type="button"
          class="inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 sm:hidden">
          <span class="sr-only">Open sidebar</span>
          <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
              d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
          </svg>
        </button>
        <a href="{{ route('dashboard') }}" class="ms-2 flex md:me-24">
          <img src="assets/images/logo.png" class="me-3 h-8" alt="FlowBite Logo" />
          <span class="self-center whitespace-nowrap text-xl font-semibold dark:text-white sm:text-2xl">Improcare</span>
        </a>
      </div>
      <div class="flex items-center">
        <div class="ms-3 flex items-center">
          <span class="text-md me-3 hidden sm:inline">{{ auth()->user()->name }}</span>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex rounded-full text-sm dark:bg-gray-800" aria-expanded="false"
              data-dropdown-toggle="dropdown-user">
              <svg class="h-5 w-5 text-gray-800 dark:text-gray-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3" />
              </svg>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
