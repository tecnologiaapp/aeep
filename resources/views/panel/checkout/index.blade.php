<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<section class="section-gap mt-4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="container mt-5 pt-5">
               <div class="card p-5 shadow-color">
                  <div class="row justify-content-center">
                     <div class="col-md-12 text-center mt-5">
                        <h4>{{__('Estamos creando una conexión segura para el pago. Este proceso demora un par de segundos. Por favor espera')}}...</h4>
                     </div>
                  </div>
               </div>
            </div>

            <div class="text-center">
               <h6 class="mb-4">También puedes dar clic en el siguiente botón:</h6>
               <form id="wepayco"></form>
            </div>
         </div>
      </div>
    </div>
</section>

   </div>
</section>



<script>

getValue();
function getValue(){
   let amount = document.getElementById("amount");
   let script  = document.createElement("script");

   script.setAttribute('src', 'https://checkout.epayco.co/checkout.js');
   script.setAttribute('class', 'epayco-button');
   script.setAttribute('data-epayco-external', 'true');
   script.setAttribute('data-epayco-key', 'be23a353046a07988ae783ec84bdbf0a');
   script.setAttribute('data-epayco-amount', '{{ $amount }}');
   script.setAttribute('data-epayco-name', '{{ __('Compra de suscripción en LEX-E')}}');
   script.setAttribute('data-epayco-description', '{{ __('Compra de suscripción en LEX-E durante cierto tiempo')}}');
   script.setAttribute('data-epayco-currency', 'cop');
   script.setAttribute('data-epayco-country', 'co');
   script.setAttribute('data-epayco-test', 'false');
   script.setAttribute('data-epayco-invoice', '{{ $invoice }}');
   script.setAttribute('data-epayco-response', 'https://lex-e.info/api/v1/pagos/response'); //https://lex-e.info/api
   script.setAttribute('data-epayco-confirmation', 'https://lex-e.info/api/v1/pagos/confirmation');
   script.setAttribute('data-epayco-lang', 'es');
   script.setAttribute('data-epayco-autoclick', 'true');
   script.setAttribute('data-epayco-extra1', '{{ $token }}');

   
   //Change or hide ePayco button
   //script.setAttribute('data-epayco-button', 'https://img.icons8.com/pastel-glyph/2x/ffffff/user-male--v1.png');

   //Buyer information
   // script.setAttribute('data-epayco-email-billing', '');
   // script.setAttribute('data-epayco-name-billing', '');

   document.getElementById("wepayco").innerHTML = '';
   document.getElementById("wepayco").appendChild(script);

}
</script>


</body>
</html>
