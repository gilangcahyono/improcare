<div style="background-color: black">
  <table>
    <tr>
      <th colspan="9">DAFTAR PRODUK</th>
    </tr>
    <tr>
      <td></td>
    </tr>
    <thead>
      <tr>
        <th>NO</th>
        <th>BARCODE</th>
        <th>NAMA</th>
        <th>HARGA</th>
        <th>STOK</th>
        <th>TOTAL</th>
        <th>SATUAN</th>
        <th>KATEGORI</th>
        <th>PEMASOK</th>
      </tr>
    </thead>
    @foreach ($products as $product)
      <tbody>
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $product->barcode }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->stock }}</td>
          <td>{{ $product->price * $product->stock }}</td>
          <td>{{ $product->unit }}</td>
          <td>{{ $product->category }}</td>
          <td>{{ $product->supplier }}</td>
        </tr>
      </tbody>
    @endforeach
  </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<script>
  const url = `{{ route('products.index') }}`;
  $(document).ready(function() {
    const table = document.getElementsByTagName("table");
    debugger;
    TableToExcel.convert(table[0], {
      name: `Produk.xlsx`,
      sheet: {
        name: 'Produk'
      }
    });
    window.location.href = url;
  });
</script>
