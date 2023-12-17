<!-- View Product Modal -->

@foreach ($stockouts as $stockout)
  <div
    class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
    id="view-stockout-modal{{ $stockout->id }}">
    <div class="w-fitt relative h-full px-4 md:h-auto">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
          <h3 class="text-xl font-semibold dark:text-white">
            Detail stok masuk
          </h3>
          <button type="button"
            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
            data-modal-toggle="view-stockout-modal{{ $stockout->id }}">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="space-y-6 p-6">
          <table class="w-full max-w-lg">
            <tr>
              <th class="text-left">Barcode</th>
              <td class="px-6 py-3">: {{ $stockout->barcode }}</td>
            </tr>
            <tr>
              <th class="text-left">Produk</th>
              <td class="px-6 py-3">: {{ $stockout->product }}</td>
            </tr>
            <tr>
              <th class="text-left">Jumlah</th>
              <td class="px-6 py-3">: {{ $stockout->total }}</td>
            </tr>
            <tr>
              <th class="text-left">Pemasok</th>
              <td class="px-6 py-3">: {{ $stockout->supplier }}</td>
            </tr>
            <tr>
              <th class="text-left">Keterangan</th>
              <td class="px-6 py-3">: {{ $stockout->information }}</td>
            </tr>
            <tr>
              <th class="text-left">Tanggal</th>
              <td class="px-6 py-3">: {{ $stockout->created_at }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach
