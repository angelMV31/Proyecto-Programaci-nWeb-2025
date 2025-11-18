<?php  
require_once __DIR__ . '/../src/config/config.php';
require_once __DIR__ . '/../src/config/functions.php';
?>

<?php include __DIR__ . '/layouts/header.php'; ?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tipos de tour's</title>
        <link href="/output.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>

    <body class="font-serif text-[#222] bg-white leading-relaxed">
   
    <section class="hero">
        <img src="/files/fondo.jpg" alt="Lancha en la playa" class="w-full h-40 object-cover">
    </section>

        <br><br>
        
        <main class="px-6 py-12 text-center">
                <h1 class="text-3xl font-bold text-[#1c2d66] mb-10">Tipos de Tours</h1>
                <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                    
            <div class="card w-80 bg-white shadow-xl border border-[#0a1a44]/30">
                <figure><img 
                src="/files/tour1.jpg" 
                alt="Tour2"
                class="h-48 w-full object-cover"
                ></figure>
                <div class="card-body text-left">
                    <h2 class="card-title text-[#1c2d66]">Pesca en laguna o río</h2>
                    <p class="text-sm">
                        Un tour tranquilo y familiar en aguas interiores, ideal para principiantes o quienes buscan relajarse mientras disfrutan del paisaje natural.
                    </p>
                    <div class="card-actions justify-center mt-3">
                    <button class="btn bg-orange-400 hover:bg-orange-500 text-white rounded-xl px-5">Rentar Ahora</button>
                    </div>
                    <br>
                </div>
            </div>
                    
            <div class="card w-80 bg-white shadow-xl border border-[#0a1a44]/30">
                <figure><img 
                src="/files/tour2.jpg" 
                alt="Tour2"
                class="h-48 w-full object-cover"
                ></figure>
                <div class="card-body text-left">
                    <h2 class="card-title text-[#1c2d66]">Pesca de dorado</h2>
                    <p class="text-sm">
                        Embárcate en la búsqueda del codiciado pez dorado, famoso por su fuerza y espectacular salto, una experiencia imperdible para los amantes de la pesca deportiva.
                    </p>
                    <div class="card-actions justify-center mt-3">
                    <button class="btn bg-orange-400 hover:bg-orange-500 text-white rounded-xl px-5">Rentar Ahora</button>
                    </div>
                    <br>
                </div>
            </div>
            
            <div class="card w-80 bg-white shadow-xl border border-[#0a1a44]/30">
                <figure><img 
                src="/files/tour3.jpg" 
                alt="Tour3" class="h-48 w-full object-cover"
                ></figure>
                <div class="card-body text-left">
                    <h2 class="card-title text-[#1c2d66]">Pesca deportiva en alta mar</h2>
                    <p class="text-sm">
                        Vive la emoción de atrapar especies grandes como marlín y pez vela en aguas profundas, acompañado de equipo profesional y guías expertos.
                    </p>
                    <div class="card-actions justify-center mt-3">
                    <button class="btn bg-orange-400 hover:bg-orange-500 text-white rounded-xl px-5">Rentar Ahora</button>
                    </div>
                    <br>
                    
                </div>
            </div>
        </section>
    </main>
</body>

<?php include __DIR__ . '/layouts/footer.php'; ?>