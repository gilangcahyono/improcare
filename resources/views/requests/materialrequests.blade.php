@extends('layouts.main')

@section('content')
  <div
    class="border-gray-20 block items-center justify-between border-b bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:flex">
    <div class="mb-1 w-full">
      <div class="mb-4">
        <h1 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Input Permintaan Barang</h1>
      </div>
      <div class="xjustify-between xsm:flex">
        <form action="{{ route('materialrequests.store') }}" method="POST" class="rounded-lg border p-3 shadow-md">
          @csrf
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="user" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Requested by
              </label>
              <input type="text" name="user" id="user" value="{{ auth()->user()->name }}"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan nama" required readonly>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="requestType" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jenis
                Permintaan</label>
              <select id="requestType" name="requestType" required
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                <option selected disabled>Pilih Jenis</option>
                <option value="Work Order">Work Order</option>
                <option value="Material Request">Material Request</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="barcode" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Barcode produk
              </label>
              <input type="text" name="barcode" id="barcode"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan barcode produk" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="quantity" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Jumlah
              </label>
              <input type="number" name="quantity" id="quantity"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan jumlah" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="customer" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Peminta</label>
              <select id="customer" name="customer" required onchange="changeCustomer(this)"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                <option selected disabled>Pilih Peminta</option>
                @foreach ($customers as $customer)
                  <option value="{{ $customer->name }}">{{ $customer->name }}</option>
                @endforeach
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3 sm:flex">
              <div class="flex w-full items-end">
                <button
                  class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                  type="submit">Tambahkan</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="flex flex-col">
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
                  Harga
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Jumlah
                </th>
                <th scope="col" class="p-4 text-end text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Total
                </th>
                <th scope="col" class="p-4 text-left text-xs font-medium uppercase text-gray-500 dark:text-gray-400">
                  Aksi
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white dark:divide-gray-700 dark:bg-gray-800">
              @php $total = 0; @endphp
              @foreach ($materialrequests as $materialrequest)
                @php $total += $materialrequest->total; @endphp
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                  <td
                    class="max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-900 dark:text-gray-400 xl:max-w-xs">
                    {{ $loop->iteration }}</td>
                  <td
                    class="max-w-sm overflow-hidden truncate p-4 text-base font-normal text-gray-900 dark:text-gray-400 xl:max-w-xs">
                    {{ $materialrequest->barcode }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $materialrequest->name }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ number_format($materialrequest->price, 0, ',', '.') }}</td>
                  <td class="whitespace-nowrap p-4 text-base font-medium text-gray-900 dark:text-white">
                    {{ $materialrequest->quantity }}</td>
                  <td class="whitespace-nowrap border p-4 text-end text-base font-medium text-gray-900 dark:text-white">
                    {{ number_format($materialrequest->total, 0, ',', '.') }}</td>
                  <td class="space-x-2 whitespace-nowrap p-4">
                    <button type="button" data-modal-target="delete-materialrequest-modal{{ $materialrequest->id }}"
                      data-modal-toggle="delete-materialrequest-modal{{ $materialrequest->id }}"
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
            <tfoot>
              <form action="{{ route('invoices.store') }}" method="POST">
                @csrf
                <input type="hidden" name="totalPrice" id="totalPrice" name="totalPrice" required
                  value="{{ $total }}">
                <input type="hidden" name="name" value="{{ 'INV' . fake()->ean13() }}">
                <tr>
                  <th>Total</th>
                  <th colspan="5"
                    class="whitespace-nowrap p-4 text-end text-base font-bold text-gray-900 dark:text-white">
                    {{ number_format($total, 0, ',', '.') }}</th>
                </tr>
                <tr>
                  <td colspan="7" class="px-4"><button type="summit"
                      class="mb-2 me-2 w-full rounded-lg bg-green-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                      Request</button>
                  </td>
                </tr>
              </form>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>

  @include('requests.partials.delete_materialrequest')

  {{-- <script>
    function changeCustomer(e) {
      console.log(e);
      if (e.value === 'Other') {
        e.remove();
        const input = document.createElement('input');
        input.type = 'text';
      }
    }
  </script> --}}
@endsection
