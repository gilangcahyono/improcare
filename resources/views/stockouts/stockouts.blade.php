@extends('layouts.main')

@section('content')
  <div
    class="border-gray-20 block items-center justify-between border-b bg-white p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex">
    <div class="mb-1 w-full">
      <div class="mb-4">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Daftar Stok Keluar</h1>
      </div>
      <div class="justify-between sm:flex">
        {{-- <div class="flex items-center space-x-2 sm:space-x-3">
          <button type="button" data-modal-target="add-stockout-modal" data-modal-toggle="add-stockout-modal"
            class="inline-flex w-1/2 items-center justify-center rounded-lg bg-blue-700 px-3 py-2 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 sm:w-auto">
            <svg class="-ml-1 mr-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
            </svg>
            Tambah Stok Keluar
          </button>
        </div> --}}
        <div class="mb-3 hidden items-center dark:divide-gray-700 sm:mb-0 sm:flex sm:divide-x sm:divide-gray-100">
          <div>
            <input type="date" name="date" id="date"
              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm">
          </div>
          {{-- <form class="lg:pr-3" action="{{ route('stockouts.index') }}" method="GET">
            <label for="search" class="sr-only">Search</label>
            <div class="relative mt-1 lg:w-64 xl:w-96">
              <input type="text" name="search" id="search"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Cari (barcode/nama)" autofocus autocomplete="off" value="{{ request('search') }}"
                list="stockouts">
              <datalist id="stockouts">
                @foreach ($invoices as $stockout)
                  <option value="{{ $stockout->name }}">{{ $stockout->name }}</option>
                @endforeach
              </datalist>
            </div>
          </form> --}}
        </div>
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
                  Kode
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Nama
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Tanggal
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Jenis
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
                    {{ $invoice->materialrequests[0]->user }}
                  </td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $invoice->updated_at }}
                  </td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $invoice->materialrequests[0]->request_type }}
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
                    <a href="{{ route('stockouts.print', ['name' => $invoice->name]) }}"
                      class="inline-flex items-center rounded-lg bg-gray-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-900">
                      <svg class="h-4 w-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                          d="M9 7V2.2a2 2 0 0 0-.5.4l-4 3.9a2 2 0 0 0-.3.5H9Zm2 0V2h7a2 2 0 0 1 2 2v9.3l-2-2a1 1 0 0 0-1.4 1.4l.3.3h-6.6a1 1 0 1 0 0 2h6.6l-.3.3a1 1 0 0 0 1.4 1.4l2-2V20a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V9h5a2 2 0 0 0 2-2Z"
                          clip-rule="evenodd" />
                      </svg>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  {{-- <div class="flex flex-col">
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          @if (session()->has('success'))
            <div
              class="mb-4 flex items-center rounded-lg bg-green-50 p-4 text-sm text-green-800 dark:bg-gray-800 dark:text-green-400"
              role="alert">
              <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{ session('success') }}</span>
              </div>
            </div>
          @endif
          @if (session()->has('overQty'))
            <div
              class="mb-4 flex items-center rounded-lg bg-red-50 p-4 text-sm text-red-800 dark:bg-gray-800 dark:text-red-400"
              role="alert">
              <svg class="me-3 inline h-4 w-4 flex-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
              </svg>
              <span class="sr-only">Info</span>
              <div>
                <span class="font-medium">{{ session('overQty') }}</span>
              </div>
            </div>
          @endif
          <table class="min-w-full table-fixed divide-y divide-gray-200 dark:divide-gray-600">
            <thead class="bg-gray-100 dark:bg-gray-700">
              <tr>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  No
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Barcode
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Nama
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Jumlah
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
              @foreach ($stockouts as $stockout)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                  <td
                    class="max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-900 dark:text-gray-400 xl:max-w-xs">
                    {{ $loop->iteration }}</td>
                  <td
                    class="max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-900 dark:text-gray-400 xl:max-w-xs">
                    {{ $stockout->barcode }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $stockout->product }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $stockout->total }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $stockout->updated_at }}</td>
                  <td class="space-x-2 whitespace-nowrap p-4">
                    <button type="button" data-modal-target="view-stockout-modal{{ $stockout->id }}"
                      data-modal-toggle="view-stockout-modal{{ $stockout->id }}"
                      class="inline-flex items-center rounded-lg bg-green-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
                      <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 14">
                        <g stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path d="M10 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                          <path d="M10 13c4.97 0 9-2.686 9-6s-4.03-6-9-6-9 2.686-9 6 4.03 6 9 6Z" />
                        </g>
                      </svg>
                    </button>
                    <button type="button" data-modal-target="delete-stockout-modal{{ $stockout->id }}"
                      data-modal-toggle="delete-stockout-modal{{ $stockout->id }}"
                      class="inline-flex items-center rounded-lg bg-red-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                      <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                          clip-rule="evenodd"></path>
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
  </div> --}}

  {{ $invoices->links() }}

  @include('stockouts.partials.view_stockout')

  {{-- @include('stockouts.partials.add_stockout') --}}

  {{-- @include('stockouts.partials.delete_stockout') --}}
@endsection

@push('scripts')
  <script>
    const date = document.getElementById('date');
    date.addEventListener('change', (e) => {
      window.location.href = '{{ route('stockouts.index') }}?date=' + e.target.value
    })
  </script>
@endpush
