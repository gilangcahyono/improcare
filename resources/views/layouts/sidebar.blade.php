<aside id="logo-sidebar"
  class="fixed left-0 top-0 z-40 h-screen w-64 -translate-x-full border-r border-gray-200 bg-gray-700 pt-20 transition-transform dark:border-gray-700 dark:bg-gray-800 sm:translate-x-0"
  aria-label="Sidebar">
  <div class="h-full overflow-y-auto bg-gray-700 px-3 pb-4 dark:bg-gray-800">
    <ul class="space-y-2 font-medium">
      <li>
        <a href="{{ route('dashboard') }}"
          class="{{ request()->is('dashboard') ? 'active' : '' }} group flex items-center rounded-lg p-2 text-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:text-white dark:hover:bg-gray-700">
          <svg
            class="{{ request()->is('dashboard') ? 'active' : '' }} h-5 w-5 text-gray-300 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
            <path
              d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
          </svg>
          <span class="ms-3">Dashboard</span>
        </a>
      </li>
      @canany(['admin'])
        <li>
          <a href="{{ route('suppliers.index') }}"
            class="{{ request()->is('suppliers') ? 'active' : '' }} group flex items-center rounded-lg p-2 text-gray-300 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">
            <svg
              class="{{ request()->is('suppliers') ? 'active' : '' }} h-5 w-5 text-gray-300 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
              <path
                d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
            </svg>
            <span class="ms-3">Pemasok</span>
          </a>
        </li>
      @endcanany
      @can(['admin'])
        <li>
          <a href="{{ route('customers.index') }}"
            class="{{ request()->is('customers') ? 'active' : '' }} group flex items-center rounded-lg p-2 text-gray-300 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">
            <svg
              class="{{ request()->is('customers') ? 'active' : '' }} h-5 w-5 flex-shrink-0 text-gray-300 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
              <path
                d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
              <path
                d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap">Pelanggan</span>
          </a>
        </li>
      @endcan
      @canany(['admin'])
        <li>
          <button type="button"
            class="{{ request()->is('products') || request()->is('categories') || request()->is('units') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 text-base text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-master" data-collapse-toggle="dropdown-master">
            <svg
              class="{{ request()->is('products') || request()->is('categories') || request()->is('units') ? 'active' : '' }} h-5 w-5 text-gray-300 group-hover:text-gray-900 dark:text-gray-400"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
              <path
                d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Master</span>
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-master" class="hidden space-y-2 py-2">
            <li>
              <a href="{{ route('products.index') }}"
                class="{{ request()->is('products') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Produk</a>
            </li>
            <li>
              <a href="{{ route('categories.index') }}"
                class="{{ request()->is('categories') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Kategori</a>
            </li>
            <li>
              <a href="{{ route('units.index') }}"
                class="{{ request()->is('units') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Satuan</a>
            </li>
          </ul>
        </li>
      @endcanany
      @canany(['admin'])
        <li>
          <button type="button"
            class="{{ request()->is('stockins') || request()->is('stockouts') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 text-base text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700"
            aria-controls="dropdown-transaksi" data-collapse-toggle="dropdown-transaksi">
            <svg
              class="{{ request()->is('stockins') || request()->is('stockouts') ? 'active' : '' }} h-5 w-5 text-gray-300 group-hover:text-gray-900 dark:text-gray-400"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="m17.855 11.273 2.105-7a.952.952 0 0 0-.173-.876 1.042 1.042 0 0 0-.37-.293 1.098 1.098 0 0 0-.47-.104H5.021L4.395.745a.998.998 0 0 0-.376-.537A1.089 1.089 0 0 0 3.377 0H1.053C.773 0 .506.105.308.293A.975.975 0 0 0 0 1c0 .265.11.52.308.707.198.187.465.293.745.293h1.513l.632 2.254v.02l2.105 6.999.785 2.985a3.13 3.13 0 0 0-1.296 1.008 2.87 2.87 0 0 0-.257 3.06c.251.484.636.895 1.112 1.19a3.295 3.295 0 0 0 3.228.12c.5-.258.918-.639 1.208-1.103.29-.465.444-.995.443-1.535a2.834 2.834 0 0 0-.194-1h2.493a2.84 2.84 0 0 0-.194 1c0 .593.186 1.173.533 1.666.347.494.84.878 1.417 1.105a3.314 3.314 0 0 0 1.824.17 3.213 3.213 0 0 0 1.617-.82 2.95 2.95 0 0 0 .864-1.536 2.86 2.86 0 0 0-.18-1.733 3.038 3.038 0 0 0-1.162-1.346 3.278 3.278 0 0 0-1.755-.506h-7.6l-.526-2h9.179c.229 0 .452-.07.634-.201a1 1 0 0 0 .379-.524Zm-2.066 4.725a1.1 1.1 0 0 1 .585.168c.173.11.308.267.388.45.08.182.1.383.06.577a.985.985 0 0 1-.288.512 1.07 1.07 0 0 1-.54.274 1.104 1.104 0 0 1-.608-.057 1.043 1.043 0 0 1-.472-.369.965.965 0 0 1-.177-.555c0-.265.11-.52.308-.707.197-.188.465-.293.744-.293Zm-7.368 1a.965.965 0 0 1-.177.555c-.116.165-.28.293-.473.369a1.104 1.104 0 0 1-.608.056 1.07 1.07 0 0 1-.539-.273.985.985 0 0 1-.288-.512.953.953 0 0 1 .06-.578c.08-.182.214-.339.388-.448a1.092 1.092 0 0 1 1.329.124.975.975 0 0 1 .308.707Zm5.263-8.999h-1.053v1c0 .265-.11.52-.308.707a1.081 1.081 0 0 1-.744.293c-.28 0-.547-.106-.745-.293a.975.975 0 0 1-.308-.707v-1H9.474a1.08 1.08 0 0 1-.745-.293A.975.975 0 0 1 8.421 7c0-.265.11-.52.308-.707.198-.187.465-.293.745-.293h1.052V5c0-.265.111-.52.309-.707.197-.187.465-.292.744-.292.279 0 .547.105.744.292a.975.975 0 0 1 .308.707v1h1.053c.28 0 .547.106.744.293a.975.975 0 0 1 .309.707c0 .265-.111.52-.309.707a1.081 1.081 0 0 1-.744.293Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Transaksi</span>
            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>
          <ul id="dropdown-transaksi" class="hidden space-y-2 py-2">
            <li>
              <a href="{{ route('stockins.index') }}"
                class="{{ request()->is('stockins') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Stok Masuk</a>
            </li>
            <li>
              <a href="{{ route('stockouts.index') }}"
                class="{{ request()->is('stockouts') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Stok Keluar</a>
            </li>
          </ul>
        </li>
      @endcanany
      <li>
        <button type="button"
          class="{{ Request::is('materialrequests') || Request::is('invoices*') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 text-base text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700"
          aria-controls="dropdown-material" data-collapse-toggle="dropdown-material">
          <svg
            class="{{ Request::is('materialrequests') || Request::is('invoices*') ? 'active' : '' }} h-5 w-5 text-gray-300 group-hover:text-gray-900 dark:text-gray-400"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path
              d="M18 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2ZM5 12a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm10 6H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2Zm0-3H9a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Zm0-3H9a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z" />
          </svg>
          <span class="ms-3 flex-1 whitespace-nowrap text-left rtl:text-right">Permintaan</span>
          <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="m1 1 4 4 4-4" />
          </svg>
        </button>
        <ul id="dropdown-material" class="hidden space-y-2 py-2">
          @canany(['admin', 'sales-manager', 'service-operator', 'operational-manager', 'service-supervisor'])
            <li>
              <a href="{{ route('materialrequests.index') }}"
                class="{{ Request::is('materialrequests*') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Material Request</a>
            </li>
          @endcanany
          @canany(['admin', 'operational-manager'])
            <li>
              <a href="{{ route('invoices.show', ['invoice' => 'approval']) }}"
                class="{{ Request::is('*approval') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Approval</a>
            </li>
          @endcanany
          @canany(['admin', 'sales-manager', 'operational-manager', 'service-operator', 'service-supervisor'])
            <li>
              <a href="{{ route('invoices.show', ['invoice' => 'history']) }}"
                class="{{ Request::is('*history') ? 'active' : '' }} group flex w-full items-center rounded-lg p-2 pl-11 text-gray-300 transition duration-75 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">🔘
                Riwayat</a>
            </li>
          @endcanany
        </ul>
      </li>
      @canany(['admin'])
        <li>
          <a href="{{ route('users.index') }}"
            class="{{ request()->is('users') ? 'active' : '' }} group flex items-center rounded-lg p-2 text-gray-300 hover:bg-gray-100 hover:text-gray-800 dark:text-white dark:hover:bg-gray-700">
            <svg
              class="{{ request()->is('users') ? 'active' : '' }} h-5 w-5 flex-shrink-0 text-gray-300 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
              aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
              <path
                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
            </svg>
            <span class="ms-3 flex-1 whitespace-nowrap">Pengguna</span>
          </a>
        </li>
      @endcanany
    </ul>
  </div>
</aside>
