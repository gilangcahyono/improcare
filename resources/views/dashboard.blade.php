@extends('layouts.main')

@section('content')
  <div class="border-gray-20 dark:borde-gray-700 dark: block items-center justify-between p-4 dark:bg-gray-900 sm:flex">
    <div class="mb-1 w-full">
      <div class="mb-4">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Dashboard</h1>
      </div>
      <div class="gap-3 sm:flex">
        <div
          class="relative w-1/4 rounded-lg border border-gray-200 bg-blue-500 p-6 shadow dark:border-gray-700 dark:bg-gray-800">
          <svg class="absolute right-5 h-14 w-14 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
            <path
              d="M8 5.625c4.418 0 8-1.063 8-2.375S12.418.875 8 .875 0 1.938 0 3.25s3.582 2.375 8 2.375Zm0 13.5c4.963 0 8-1.538 8-2.375v-4.019c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353c-.193.081-.394.158-.6.231l-.189.067c-2.04.628-4.165.936-6.3.911a20.601 20.601 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244c-.053-.028-.113-.053-.165-.082v4.019C0 17.587 3.037 19.125 8 19.125Zm7.09-12.709c-.193.081-.394.158-.6.231l-.189.067a20.6 20.6 0 0 1-6.3.911 20.6 20.6 0 0 1-6.3-.911l-.189-.067a10.719 10.719 0 0 1-.852-.34 8.08 8.08 0 0 1-.493-.244C.112 6.035.052 6.01 0 5.981V10c0 .837 3.037 2.375 8 2.375s8-1.538 8-2.375V5.981c-.052.029-.112.054-.165.082a8.08 8.08 0 0 1-.745.353Z" />
          </svg>
          <span>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-50 dark:text-white">{{ $productCount }}</h5>
          </span>
          <p class="mb-3 font-normal text-gray-50 dark:text-gray-400">Produk</p>
          <a href="{{ route('products.index') }}" class="inline-flex items-center text-gray-50 hover:underline">
            Selengkapnya
            <svg class="ms-2.5 h-3 w-3 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
        <div
          class="relative w-1/4 rounded-lg border border-gray-200 bg-green-500 p-6 shadow dark:border-gray-700 dark:bg-gray-800">
          <svg class="absolute right-5 h-14 w-14 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
            <path
              d="M19.9 6.58c0-.009 0-.019-.006-.027l-2-4A1 1 0 0 0 17 2h-4a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a1 1 0 0 0 1 1h.3c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0A3.173 3.173 0 0 0 7.7 12h4.6c-.03.165-.047.332-.051.5a3.25 3.25 0 1 0 6.5 0 3.177 3.177 0 0 0-.049-.5h.3a1 1 0 0 0 1-1V7a.99.99 0 0 0-.1-.42ZM16.382 4l1 2H13V4h3.382ZM4.5 13.75a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Zm11 0a1.25 1.25 0 1 1 0-2.5 1.25 1.25 0 0 1 0 2.5Z" />
          </svg>
          <span>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-50 dark:text-white">{{ $supplierCount }}</h5>
          </span>
          <p class="mb-3 font-normal text-gray-50 dark:text-gray-400">Pemasok</p>
          <a href="{{ route('suppliers.index') }}" class="inline-flex items-center text-gray-50 hover:underline">
            Selengkapnya
            <svg class="ms-2.5 h-3 w-3 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
        <div
          class="relative w-1/4 rounded-lg border border-gray-200 bg-pink-500 p-6 shadow dark:border-gray-700 dark:bg-gray-800">
          <svg class="absolute right-5 h-14 w-14 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
            <path
              d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
            <path
              d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
          </svg>
          <span>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-50 dark:text-white">{{ $customerCount }}</h5>
          </span>
          <p class="mb-3 font-normal text-gray-50 dark:text-gray-400">Pelanggan</p>
          <a href="{{ route('customers.index') }}" class="inline-flex items-center text-gray-50 hover:underline">
            Selengkapnya
            <svg class="ms-2.5 h-3 w-3 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
        <div
          class="relative w-1/4 rounded-lg border border-gray-200 bg-purple-500 p-6 shadow dark:border-gray-700 dark:bg-gray-800">
          <svg class="absolute right-5 h-14 w-14 text-gray-500 dark:text-gray-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
            <path
              d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
          </svg>
          <span>
            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-50 dark:text-white">{{ $userCount }}</h5>
          </span>
          <p class="mb-3 font-normal text-gray-50 dark:text-gray-400">Pengguna</p>
          <a href="{{ route('users.index') }}" class="inline-flex items-center text-gray-50 hover:underline">
            Selengkapnya
            <svg class="ms-2.5 h-3 w-3 rtl:rotate-[270deg]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 18 18">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 11v4.833A1.166 1.166 0 0 1 13.833 17H2.167A1.167 1.167 0 0 1 1 15.833V4.167A1.166 1.166 0 0 1 2.167 3h4.618m4.447-2H17v5.768M9.111 8.889l7.778-7.778" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
