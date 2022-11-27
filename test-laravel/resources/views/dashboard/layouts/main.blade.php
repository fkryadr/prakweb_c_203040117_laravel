<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma | Dashboard</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    {{--  Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display:none;
        }
    </style>
</head>

<body>
<div class="flex h-screen">

    @include('dashboard.layouts.sidebar')

    <div class="mx-4 my-2 mb-6">
        <h1 class="text-2xl font-bold text-black">My Posts</h1>
    </div>




</div>


</body>

</html>
