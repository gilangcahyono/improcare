@extends('layouts.main')

@section('content')
  <div
    class="border-gray-20 block items-center justify-between border-b bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex">
    <div class="mb-1 w-full">
      <div class="mb-4">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Riwayat Permintaan</h1>
      </div>
      <div class="justify-between sm:flex">
        <div class="mb-3 hidden items-center dark:divide-gray-700 sm:mb-0 sm:flex sm:divide-x sm:divide-gray-100">
          <form class="lg:pr-3" action="{{ route('invoices.show', ['invoice' => 'history']) }}" method="GET">
            <label for="search" class="sr-only">Search</label>
            <div class="relative mt-1 lg:w-64 xl:w-96">
              <input type="text" name="search" id="search"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Cari kode invoice" autofocus value="{{ request('search') }}">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="flex flex-col">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
            <thead class="bg-gray-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  No
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Nama
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Tanggal
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
              @foreach ($invoices as $invoice)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                  <td
                    class="max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-500 dark:text-gray-400 xl:max-w-xs">
                    {{ $loop->iteration }}
                  </td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $invoice->name }}
                  </td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $invoice->created_at }}
                  </td>
                  <td class="space-x-2 whitespace-nowrap p-4">
                    <button type="button" data-modal-target="view-invoice-modal{{ $invoice->id }}"
                      data-modal-toggle="view-invoice-modal{{ $invoice->id }}"
                      class="inline-flex items-center rounded-lg bg-green-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
                      <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 14">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                          <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                        </g>
                      </svg>
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  {{ $invoices->links() }}

  {{-- @include('invoices.partials.edit_invoice') --}}

  {{-- @include('invoices.partials.add_invoice') --}}

  @include('invoices.partials.accept_invoice')

  @include('invoices.partials.deny_invoice')
@endsection
