<!-- Add Stockout Modal -->
<div
  class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
  id="add-stockout-modal">
  <div class="relative h-full w-full max-w-2xl px-4 md:h-auto">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
        <h3 class="text-xl font-semibold dark:text-white">
          Tambah stok keluar
        </h3>
        <button type="button"
          class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
          data-modal-toggle="add-stockout-modal">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- Modal body -->
      <div class="space-y-6 p-6">
        <form action="{{ route('stockouts.store') }}" method="POST">
          @csrf
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="created_at" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Tanggal
              </label>
              <input type="date" name="created_at" id="created_at" value="{{ date('Y-m-d') }}"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="productName" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Produk
              </label>
              <input type="text" name="productName" id="productName"
                class="typeahead auto-select block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan nama produk" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="total" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                Jumlah
              </label>
              <input type="number" name="total" id="total" min="1"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan Jumlah" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="customer"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Pelanggan</label>
              <select id="customer" name="customer"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                @foreach ($customers as $customer)
                  <option value="{{ $customer->name }}">{{ $customer->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-span-6 sm:col-span-6">
              <label for="information"
                class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
              <textarea id="information" name="information" rows="4"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                placeholder="Tulis keterangannya disini..."></textarea>
            </div>
          </div>
      </div>
      <!-- Modal footer -->
      <div class="items-center rounded-b border-t border-gray-200 p-6 dark:border-gray-700">
        <button
          class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
          type="submit">Tambahkan</button>
      </div>
      </form>
    </div>
  </div>
</div>

{{-- <script>
  const productName = document.getElementById('productName');
  const pathAutoStock = `{{ url('products') }}`;
  productName.addEventListener('blur', (e) => {
    fetch(pathAutoStock + `/${e.target.value}`)
      .then(res => res.json())
      .then(data => {
        const total = document.getElementById('total');
        total.setAttribute('max', data[0].stock);
      })
  })
</script> --}}
