<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Improcare</title>
  <link rel="shortcut icon" href="{{ url('assets/images/logo.png') }}" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @include('layouts.navbar')

  @include('layouts.sidebar')

  <div class="sm:ml-64">
    <div class="mt-14">
      @yield ('content')
    </div>
  </div>

  {{-- <script type="text/javascript">
    const path = "{{ route('inputproduct') }}";

    $('input.typeahead').typeahead({
      source: function(query, process) {
        return $.get(path, {
          query: query
        }, function(data) {
          return process(data);
        });
      }
    });

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
  @stack('scripts')

</body>

</html>
