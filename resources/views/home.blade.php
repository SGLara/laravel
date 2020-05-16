<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pelicula SPIDER-MAN</title>
  <meta name="author" content="Steven Lara">
  <meta name="description" content="">
  <link rel="shortcut icon" href="img/movie.ico" type="image/x-icon">

  <!-- Tailwind -->
  <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

    .font-family-karla {
      font-family: karla;
    }

    body {
      background-color: #ff0000;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='hexagons' fill='%23000000' fill-opacity='0.15' fill-rule='nonzero'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      background-attachment: fixed;
    }
  </style>

  <!-- AlpineJS -->
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
    integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

<body class="font-family-karla">

  <!-- Text Header -->
  <header class="w-full container mx-auto">
    <div class="flex flex-col items-center py-12">
      <a class="font-bold text-gray-900 uppercase text-6xl" href="#">SPIDER-MAN</a>
      <p class="text-lg text-gray-900 font-bold text-3xl">
        La emoción del año 2020
      </p>
    </div>
  </header>

  <!-- Topic Nav -->
  <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
      <a href="#" class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
        @click="open = !open">
        Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
      </a>
    </div>
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
      <div
        class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-1">
        <a href="#sipnosis" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">SIPNOSIS</a>
        <a href="#trajes" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">TRAJES</a>
        <a href="#trailer" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">TRAILER</a>
        <a href="#tickets" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">TICKETS</a>
      </div>
    </div>
  </nav>


  <div class="container mx-auto flex flex-wrap py-4">

    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

      <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#">
          <img src="img/a.jpg">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
          <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4" id="#sipnosis">SIPNOSIS</a>
          <a href="#" class="text-1xl font-italic pb-4">Peter Parker es un adolescente
            huérfano brillante científicamente, pero inepto socialmente. Vive con sus tíos, Benjamin "Ben"
            Parker y May Parker, en el vecindario de Forest Hills, en el distrito neoyorquino de Queens.
            Está enamorado de su vecina, Mary Jane Watson aunque es demasiado tímido para acercársele, y es
            el mejor amigo de Harry Osborn, quien lo defiende siempre de las burlas de sus compañeros de la
            escuela. El padre de Harry, Norman Osborn, es el dueño de Oscorp, una empresa que fabrica armas
            (aerodeslizadores, trajes de vuelo) para el ejército. Un día la clase de Peter hace una
            excursión a un laboratorio de genética donde Peter es mordido por una "súper-araña". Al regresar
            a casa, Peter se desmaya en lo que la mordedura provoca en él un cambio que le otorga poderes
            sobrehumanos arácnidos: fuerza proporcional a la de una araña, capacidad de adherirse a las
            paredes, capacidad para segregar y lanzar redes similares a las telarañas por las manos y un
            «sentido arácnido» que le advierte de los peligros que le pueden acechar.</a>
          <p href="#" class="text-sm pb-3">
            <a href="#" class="uppercase text-gray-800">Continue Reading <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
          <img src="img/d.jpg">
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
          <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4" id="#trajes">TRAJES</a>
          <a href="#" class="text-1xl  font-italic hover:text-gray-700 pb-4">Casi todos conocemos a Spiderman. Se
            puede decir que, durante muchos años, El Asombroso Hombre Araña fue el héroe más popular de
            Marvel Comics –con permiso de los X-Men, que también han sido de los personajes con más tirón de
            la Casa de las Ideas.

            Creemos que uno de los motivos de la popularidad del personaje radica en el diseño del traje y
            en lo fácilmente identificable que es. Y es que el diseño y los motivos del uniforme de
            Spiderman han hecho que este héroe sea fácilmente reconocible tanto por lectores veteranos como
            por aquellos que solo lo conocen de pasada.

            Sin embargo, más allá del traje clásico de Spidey, hemos de señalar que el traje del héroe ha
            tenido numerosas variantes. En este texto te proponemos un repaso a los 10 mejores trajes que
            Peter Parker ha vestido como Spiderman.

            Además, también hacemos mención a los trajes de Spiderman que han vestido otros personajes
            homólogos al Hombre Araña original: Ben Reilly, Miles Morales, Miguel O’Hara Gwen Stacy… ¡Otto
            Octavius! ¡Seguro que logramos sorprenderte!
          </a>
          <p href="#" class="text-sm pb-3">
            <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i
                class="fas fa-arrow-right"></i></a>
        </div>
      </article>

      <article class="flex flex-col shadow my-4">
        <!-- Article Image -->
        <a href="#" class="hover:opacity-75">
          <iframe width="850" height="315" src="https://www.youtube.com/embed/U7vjPGJ8THU" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        <div class="bg-white flex flex-col justify-start p-6">
          <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4 text-center" id="#trailer">TRAILER</a>
        </div>
      </article>

      <!-- Pagination -->
      <div class="flex items-center py-8">
        <a href="#"
          class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
        <a href="#"
          class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
        <a href="#"
          class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next
          <i class="fas fa-arrow-right ml-2"></i></a>
      </div>
      <!-- id="tickets" -->
    </section>

    <!-- Sidebar Section -->
    <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

      <div class="w-full bg-white shadow flex flex-col my-4 p-6">
        <p class="text-xl font-semibold pb-5">Instagram</p>
        <div class="grid grid-cols-3 gap-3">
          <img class="hover:opacity-75" src="img/a.jpg">
          <img class="hover:opacity-75" src="img/b.jpg">
          <img class="hover:opacity-75" src="img/c.jpg">
          <img class="hover:opacity-75" src="img/j.jpg">
          <img class="hover:opacity-75" src="img/h.jpg">
          <img class="hover:opacity-75" src="img/g.jpg">
          <img class="hover:opacity-75" src="img/d.jpg">
          <img class="hover:opacity-75" src="img/i.jpg">
          <img class="hover:opacity-75" src="img/f.jpg">
        </div>
        <a href="#"
          class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
          <i class="fab fa-instagram mr-2"></i> Follow SGLara
        </a>
      </div>

    </aside>

  </div>

  <center>
    <footer class="w-full border-t bg-white pb-12 p-10" id="tickets">
      <h1 class="font-bold text-gray-900 uppercase hover:text-gray-800 text-5xl">¿QUIERES GANAR TICKETS PARA VER ESTA
        PELICULA?</h1>
      <h1>Ingresa tu información aqui para participar</h1><br>
      <form class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
              Nombre
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
              id="grid-first-name" type="text" placeholder="Steven">
            <p class="text-red-500 text-xs italic">Porfavor ingrese sus datos.</p>
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
              Apellido
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-last-name" type="text" placeholder="Lara">
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full px-3">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
              Contraseña
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-password" type="password" placeholder="******************">
            <p class="text-gray-600 text-xs italic">Escribe una contraseña poderosa</p>
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
              Ciudad
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-city" type="text" placeholder="Ilopango">
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
              Departamento
            </label>
            <div class="relative">
              <select
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option>EL Salvador</option>
                <option>Guatemala</option>
                <option>Honduras</option>
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
              Zip
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-zip" type="text" placeholder="90210"><br><br>
            <button
              class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
              ENVIAR
            </button>
          </div>
        </div>
      </form>
    </footer>
  </center>

</body>

</html>

@endsection
