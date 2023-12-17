<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard | Improcare</title>
  <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-900">

  @include('layouts.navbar')

  @include('layouts.sidebar')

  <div class="sm:ml-64">
    <div class="mt-14">
      @yield ('content')
    </div>
  </div>

</body>

</html>
