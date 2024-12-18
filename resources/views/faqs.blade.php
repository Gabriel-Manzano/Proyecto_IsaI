@extends('layouts.plantilla1')

@section('title', 'Preguntas Frecuentes')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/componentes.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles_faqs.css') }}">
@endpush

@section('content')
<br>
<br>
<body>
    <!-- Vista de Preguntas Frecuentes -->
    <div class="faq-container">
        <h2>Preguntas Frecuentes</h2>

        <div class="faq-item">
            <h3 onclick="toggleAnswer(this)">¿Cómo puedo hacer una reserva?</h3>
            <div class="faq-answer">
                <p>Puedes hacer una reserva a través de nuestra página web. Simplemente selecciona el hotel, las fechas
                    de estancia y sigue las instrucciones en pantalla.</p>
            </div>
        </div>

        <div class="faq-item">
            <h3 onclick="toggleAnswer(this)">¿Qué métodos de pago aceptan?</h3>
            <div class="faq-answer">
                <p>Aceptamos tarjetas de crédito, débito y transferencias bancarias. También puedes utilizar servicios
                    de pago como PayPal.</p>
            </div>
        </div>

        <div class="faq-item">
            <h3 onclick="toggleAnswer(this)">¿Cuál es la política de cancelación?</h3>
            <div class="faq-answer">
                <p>Nuestra política de cancelación permite cancelar tu reserva sin cargo hasta 24 horas antes de la
                    fecha de check-in.</p>
            </div>
        </div>

        <div class="faq-item">
            <h3 onclick="toggleAnswer(this)">¿Cómo puedo cambiar o modificar mi reserva?</h3>
            <div class="faq-answer">
                <p>Puedes modificar tu reserva contactando a nuestro servicio de atención al cliente o desde tu perfil
                    en nuestra página web.</p>
            </div>
        </div>

        <div class="faq-item">
            <h3 onclick="toggleAnswer(this)">¿Hay algún cargo adicional que deba conocer?</h3>
            <div class="faq-answer">
                <p>Los precios mostrados incluyen todos los impuestos, pero puede haber tarifas adicionales por
                    servicios extra como el desayuno o acceso al gimnasio.</p>
            </div>
        </div>

        <!-- Añadir más preguntas según sea necesario -->
    </div>

    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            if (answer.style.display === "block") {
                answer.style.display = "none";
            } else {
                answer.style.display = "block";
            }
        }
    </script>
</body>
@endsection

@push('scripts')
    <script>
        function toggleAnswer(element) {
            const answer = element.nextElementSibling;
            answer.style.display = (answer.style.display === "block") ? "none" : "block";
        }
    </script>
@endpush