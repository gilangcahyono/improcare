<!-- Edit Pelanggan Modal -->

@foreach ($users as $user)
  <div
    class="fixed left-0 right-0 top-4 z-50 hidden h-modal items-center justify-center overflow-y-auto overflow-x-hidden sm:h-full md:inset-0"
    id="edit-user-modal{{ $user->id }}">
    <div class="relative h-full w-full max-w-2xl px-4 md:h-auto">
      <!-- Modal content -->
      <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
        <!-- Modal header -->
        <div class="flex items-start justify-between rounded-t border-b p-5 dark:border-gray-700">
          <h3 class="text-xl font-semibold dark:text-white">
            Edit Pengguna
          </h3>
          <button type="button"
            class="ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white"
            data-modal-toggle="edit-user-modal{{ $user->id }}">
            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="space-y-6 p-6">
          <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="oldPassword" required value="{{ $user->password }}">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                </label>
                <input type="text" name="name" id="name" value="{{ $user->name }}"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                  placeholder="Masukan nama" required>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="username" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Username
                </label>
                <input type="text" name="username" id="username" value="{{ $user->username }}"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                  placeholder="Masukan username" required>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="phone" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  No. Tlp
                </label>
                <input type="tel" name="phone" id="phone" value="{{ $user->phone }}"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                  placeholder="Masukan nomor telepon" required>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="password" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                  Password
                </label>
                <input type="password" name="password" id="password" minlength="6"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 shadow-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500 sm:text-sm"
                  placeholder="Masukan password">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="role" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Hak
                  Akses</label>
                <select id="role" name="role"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500">
                  <option selected value="{{ $user->role }}">{{ $user->role }}</option>
                  <option value="Administrator">Administrator</option>
                  <option value="Operasional Manager">Operasional Manager</option>
                  <option value="Sales Manager">Sales Manager</option>
                  <option value="Service Operator">Service Operator</option>
                </select>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="information"
                  class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea id="information" name="information" rows="4"
                  class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                  placeholder="Tulis keterangan disini...">{{ $user->information }}</textarea>
              </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="items-center rounded-b border-t border-gray-200 p-6 dark:border-gray-700">
          <button
            class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="submit">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
@endforeach
