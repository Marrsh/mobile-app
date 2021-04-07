<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <script src="{{ asset('js/form.js')}}"></script>
</head>
<body class="font-sans">
<h1 class="text-center bg-black p-3 text-5xl mx-auto bg-black font-stronger antialiased text-white"><img src="https://senditmobile.com/img/logo.png" class="w-20"></h1>
    <div class="container mx-auto my-20">
        <div class="items-stretch rounded-lg shadow-xl bg-mobile-yellow xl:mx-auto" id="card">
            {{$from}}
        </div>
    </div>
</body>