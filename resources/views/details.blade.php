<head>
<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body class="font-sans">
<h1 class="text-center bg-black p-3 text-5xl mx-auto bg-black font-stronger antialiased text-white"><img src="{{ asset('assets/mobile-logo.png') }}" class="w-40 p-3"></h1>
    <div class="container mx-auto my-20">
        <div class="items-stretch rounded-lg shadow-xl bg-mobile-yellow xl:mx-auto" id="card">

        <h1 class="text-3xl font-light p-4 text-center">breakdown</h1>
        <div class="text-center text-lg p-3">
            <p>postcode from :{{$formData->postcodeFrom}}</p>
            <p>postcode to :{{$formData->postcodeTo}}</p>
            <p>full pallets : {{$formData->full}}</p>
            <p>half pallets : {{$formData->half}}</p>
            <p>quarter pallets : {{$formData->quarter}}</p>
            <p>Total price : £{{$price}}</p>
            <a class="btn p-2 bg-white mt-5" href="/">Try another quote</a>
        </div>

    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/form.js') }}"></script>
