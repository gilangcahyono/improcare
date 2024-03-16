<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Print Document</title>
  @vite('resources/css/app.css')
</head>

<body class="container mx-auto">
  <div class="flex items-center justify-between">
    <div>
      <img src="{{ asset('assets/images/improcare.png') }}" class="-mt-7 h-36">
    </div>
    <div>
      <p>......................., ..........................................</p>
      <p class="mb-9">Kepada Yth :</p>
      <p>...................................................................</p>
    </div>
  </div>
  <div class="mb-3 flex justify-between">
    <div class="flex-1">
      <p>No. ______________________________</p>
      <p>Kami kirimkan barang tersebut dengan kendaraan</p>
    </div>
    <div class="flex-1">
      <h1 class="text-center text-3xl font-semibold">SURAT JALAN</h1>
    </div>
    <div class="flex flex-1 flex-col">
      <p class="text-end underline">............................................................</p>
      <p class="text-end">No.Pol......................................................</p>
    </div>
  </div>
  <table class="w-full border border-black">
    <thead>
      <tr class="border border-black">
        <td class="border border-black px-8 py-1 text-center">BANYAKNYA</td>
        <td class="border border-black px-8 py-1 text-center">NAMA BARANG</td>
      </tr>
    </thead>
    @foreach ($products as $product)
      <tbody>
        <tr class="border border-black">
          <td class="border border-black px-2 py-1 text-center">{{ $product->quantity }}</td>
          <td class="w-full border border-black px-2 py-1">{{ $product->name }}</td>
        </tr>
      </tbody>
    @endforeach
  </table>

  <div class="mx-24 mt-10 flex justify-between">
    <div>
      <p class="mb-20 text-center">Tanda Terima,</p>
      <p class="text-centers">.......................................................</p>
    </div>
    <div>
      <p class="mb-20 text-center">Hormat Kami,</p>
      <p class="text-center">.......................................................</p>
    </div>
  </div>

  <script>
    window.print();
  </script>
</body>

</html>
