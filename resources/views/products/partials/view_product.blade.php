<!-- View Product Modal -->

@foreach ($products as $product)
  <div
    class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
    id="view-product-modal{{ $product->id }}">
    <div class="w-fitt relative h-full px-4 md:h-auto">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
          <h3 class="text-xl font-semibold dark:text-white">
            Detail produk
          </h3>
          <button type="button"
            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
            data-modal-toggle="view-product-modal{{ $product->id }}">
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
            <tr>
              <th class="text-left">Barcode</th>
              <td class="px-6 py-3">: {{ $product->barcode }}</td>
              <td class="max-w-sm align-top" rowspan="7">
                <img class="h-56 w-56 object-cover hover:object-contain" src="{{ 'storage/' . $product->image }}"
                  alt="{{ $product->name }}">
              </td>
            </tr>
            <tr>
              <th class="text-left">Nama</th>
              <td class="px-6 py-3">: {{ $product->name }}</td>
            </tr>
            <tr>
              <th class="text-left">Harga</th>
              <td class="px-6 py-3">: {{ $product->price }}</td>
            </tr>
            <tr>
              <th class="text-left">Stok</th>
              <td class="px-6 py-3">: {{ $product->stock }}</td>
            </tr>
            <tr>
              <th class="text-left">Satuan</th>
              <td class="px-6 py-3">: {{ $product->unit }}</td>
            </tr>
            <tr>
              <th class="text-left">Kategori</th>
              <td class="px-6 py-3">: {{ $product->category }}</td>
            </tr>
            <tr>
              <th class="text-left">Pemasok</th>
              <td class="px-6 py-3">: {{ $product->supplier }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endforeach
