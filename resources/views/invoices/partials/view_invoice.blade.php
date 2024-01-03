<!-- View Invoice Modal -->

@foreach ($invoices as $invoice)
  <div
    class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
    id="view-invoice-modal{{ $invoice->id }}">
    <div class="w-fitt relative h-full px-4 md:h-auto">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
          <h3 class="text-xl font-semibold dark:text-white">
            Detail Permintaan
          </h3>
          <button type="button"
            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
            data-modal-toggle="view-invoice-modal{{ $invoice->id }}">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="space-y-6 p-6">
          <table class="w-full">
            <thead>
              <tr>
                <th class="text-left">Tanggal</th>
                <td class="px-6 py-3">: {{ $invoice->created_at }}</td>
              </tr>
              <tr>
                <th class="text-left">User</th>
                <td class="px-6 py-3">: {{ $invoice->materialrequests[0]->user }}</td>
              </tr>
              <tr>
                <th class="text-left">Kode</th>
                <td class="px-6 py-3">: {{ $invoice->name }}</td>
              </tr>
              <tr>
                <th class="text-left">Pelanggan</th>
                <td class="px-6 py-3">:
                  {{ $invoice->materialrequests[count($invoice->materialrequests) - 1]->customer }}
                </td>
              </tr>
            </thead>
            <tbody>
              @foreach ($invoice->materialrequests as $materialrequest)
                <tr>
                  <td class="px-6 py-3 text-left">{{ $materialrequest->name }}</td>
                  <td class="px-6 py-3 text-center">{{ $materialrequest->quantity }} x </td>
                  <td class="px-6 py-3 text-center">{{ number_format($materialrequest->price, 0, ',', '.') }}</td>
                  <td class="px-6 py-3 text-center">{{ number_format($materialrequest->total, 0, ',', '.') }}</td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                <th class="px-6 py-3 text-end" colspan="3">Total</th>
                <th class="px-6 py-3 text-end">{{ number_format($invoice->totalPrice, 0, ',', '.') }}
                </th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach
