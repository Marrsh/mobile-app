<head>
  <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <link href="{{ asset('css/index.css') }}" rel="stylesheet">
</head>
<body class="font-sans">
  <h1 class="text-center bg-black p-3 text-5xl mx-auto bg-black font-stronger antialiased text-white"><img src="{{ asset('assets/mobile-logo.png') }}" class="w-40 mx-auto"></h1>
    <div class="container mx-auto my-20">
      <div class="items-stretch rounded-lg shadow-xl bg-mobile-yellow xl:mx-auto" id="card">
        <h1 class="text-3xl font-light p-4 text-center lg:text-left">Pallet Delivery</h1>

      <form class="text-center" action="/get-quote" method="POST">
      @csrf
              <div class="grid xl:grid-cols-3 gap-4">
                <div>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-loading" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="hidden xl:inline-block w-10 svg-inline--fa fa-truck-loading fa-w-20 fa-2x"><path fill="currentColor" d="M50.2 375.6c2.3 8.5 11.1 13.6 19.6 11.3l216.4-58c8.5-2.3 13.6-11.1 11.3-19.6l-49.7-185.5c-2.3-8.5-11.1-13.6-19.6-11.3L151 133.3l24.8 92.7-61.8 16.5-24.8-92.7-77.3 20.7C3.4 172.8-1.7 181.6.6 190.1l49.6 185.5zM384 0c-17.7 0-32 14.3-32 32v323.6L5.9 450c-4.3 1.2-6.8 5.6-5.6 9.8l12.6 46.3c1.2 4.3 5.6 6.8 9.8 5.6l393.7-107.4C418.8 464.1 467.6 512 528 512c61.9 0 112-50.1 112-112V0H384zm144 448c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" class=""></path></svg>
                </div>
                <div>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="truck-moving" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="hidden xl:inline-block w-10 svg-inline--fa fa-truck-moving fa-w-20 fa-3x"><path fill="currentColor" d="M621.3 237.3l-58.5-58.5c-12-12-28.3-18.7-45.3-18.7H480V64c0-17.7-14.3-32-32-32H32C14.3 32 0 46.3 0 64v336c0 44.2 35.8 80 80 80 26.3 0 49.4-12.9 64-32.4 14.6 19.6 37.7 32.4 64 32.4 44.2 0 80-35.8 80-80 0-5.5-.6-10.8-1.6-16h163.2c-1.1 5.2-1.6 10.5-1.6 16 0 44.2 35.8 80 80 80s80-35.8 80-80c0-5.5-.6-10.8-1.6-16H624c8.8 0 16-7.2 16-16v-85.5c0-17-6.7-33.2-18.7-45.2zM80 432c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm128 0c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32zm272-224h37.5c4.3 0 8.3 1.7 11.3 4.7l43.3 43.3H480v-48zm48 224c-17.6 0-32-14.4-32-32s14.4-32 32-32 32 14.4 32 32-14.4 32-32 32z" class=""></path></svg>
                </div>
                <div>
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="dolly" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="hidden xl:inline-block w-10 svg-inline--fa fa-dolly fa-w-20 fa-2x"><path fill="currentColor" d="M294.2 277.7c18 5 34.7 13.4 49.5 24.7l161.5-53.8c8.4-2.8 12.9-11.9 10.1-20.2L454.9 47.2c-2.8-8.4-11.9-12.9-20.2-10.1l-61.1 20.4 33.1 99.4L346 177l-33.1-99.4-61.6 20.5c-8.4 2.8-12.9 11.9-10.1 20.2l53 159.4zm281 48.7L565 296c-2.8-8.4-11.9-12.9-20.2-10.1l-213.5 71.2c-17.2-22-43.6-36.4-73.5-37L158.4 21.9C154 8.8 141.8 0 128 0H16C7.2 0 0 7.2 0 16v32c0 8.8 7.2 16 16 16h88.9l92.2 276.7c-26.1 20.4-41.7 53.6-36 90.5 6.1 39.4 37.9 72.3 77.3 79.2 60.2 10.7 112.3-34.8 113.4-92.6l213.3-71.2c8.3-2.8 12.9-11.8 10.1-20.2zM256 464c-26.5 0-48-21.5-48-48s21.5-48 48-48 48 21.5 48 48-21.5 48-48 48z" class=""></path></svg>
                </div>
                <div>
                    <input class="border-gray border shadow-lg rounded-lg p-3 md:w-80 w-60" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" name="postcodeFrom" type="text" placeholder="Collection Postcode" required>
                </div>
                <div>
                  <input class="border-gray border shadow-lg rounded-lg p-3 md:w-80 w-60" pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" name="postcodeTo" type="text" placeholder="Delivery Postcode" required>
                </div>
                <div>
                  <button type="button" class="pallet-button border-gray border shadow-lg rounded-lg p-3 md:w-80 w-60 bg-white text-left">Pallets<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3 float-right inline-block"><path fill="currentColor" d="M143 352.3L7 216.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.2 9.4-24.4 9.4-33.8 0z" class=""></path></svg></button>
                </div> 
              </div>
              <div id="pallet-options" class="bg-white w-100 z-index-10 mt-5 pb-5" hidden>
                <h1 class="antialiased text-3xl p-4 font-light">Pallet sizes</h1> 
                <div class="lg:flex justify-content-center rounded-lg gap-20 mx-auto">
                  <div class="block form-group">
                  <label for="full" class="block">Full size</label> 
                    <button type="button" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tl-lg rounded-bl-lg shadow-xs minus">-</button>
                    <input type="number" class="number-of-pallets h-10 outline-none focus:outline-none text-center bg-white font-semibold text-md" name="full" value="0"></input>
                    <button type="button" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tr-lg rounded-br-lg shadow-xs add">+</button>
                  </div>
                  <div class="block form-group">
                  <label for="half" class="block">Half size</label> 
                  <button type="button" id="plus" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tl-lg rounded-bl-lg shadow-xs minus">-</button>
                    <input type="number" class="number-of-pallets h-10 outline-none focus:outline-none text-center bg-white font-semibold text-md" name="half" value="0"></input>
                    <button type="button" id="minus" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tr-lg rounded-br-lg shadow-xs add">+</button>
                  </div>
                  <div class="block form-group">
                  <label for="quarter" class="block">Quater size</label> 
                  <button type="button" id="plus" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tl-lg rounded-bl-lg shadow-xs minus">-</button>
                    <input type="number" class="number-of-pallets h-10 outline-none focus:outline-none text-center bg-white font-semibold text-md" name="quarter" value="0"></input>
                    <button type="button" id="minus" class="h-10 bg-mobile-yellow cursor-pointer outline-none w-10 rounded-tr-lg rounded-br-lg shadow-xs add">+</button>
                  </div>
                </div>
              </div>

              <button class="btn p-2 w-60 my-5 rounded-md bg-black text-mobile-yellow mx-auto text-center hover:text-mobile-yellow" type="submit">Get Quote</button>
        </form>
      </div>
    </div>
</body>
<!-- <script src="{{ asset('js/app.js')}}"></script> -->
<!-- <script src="js/app.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@9.0.0/dist/js/autoComplete.min.js"></script> -->
<!-- <script src="{{ asset('js/autoComplete.js-9.0.0/dist/js/autoComplete.min.js')}}" type="module"></script> -->
<script src="{{ asset('js/form.js')}}"></script>
