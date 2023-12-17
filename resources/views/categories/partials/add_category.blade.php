<!-- Add Product Modal -->
<div
  class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
  id="add-user-modal">
  <div class="relative h-full w-full max-w-2xl px-4 md:h-auto">
    <!-- Modal content -->
    <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
      <!-- Modal header -->
      <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
        <h3 class="text-xl font-semibold dark:text-white">
          Tambah Kategori
        </h3>
        <button type="button"
          class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
          data-modal-toggle="add-user-modal">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <!-- Modal body -->
      <div class="space-y-6 p-6">
        <form action="{{ route('categories.store') }}" method="POST">
          @csrf
          <div class="grid grid-cols-4 gap-6">
            <div class="col-span-6 sm:col-span-6">
              <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
              </label>
              <input type="text" name="name" id="name"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                placeholder="Masukan nama" required>
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
