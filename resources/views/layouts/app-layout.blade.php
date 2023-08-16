<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Es braucht uns GRÜNE : Mehr denn je!</title>
    @vite(["resources/css/app.scss"])
</head>
<body class="antialiased">

    <main id="main-content">
        {{ $slot }}
    </main>

    <div class="mdj-container mdj-container__large flex flex-col md:flex-row justify-between mt-28 mb-4 md:items-end gap-4">
        <x-logo-pos/>
        <p class="text-sm opacity-50">
            Eine Webseite der <a href="https://gruenezuerich.ch" class="underline">GRÜNEN der Stadt Zürich.</a>
        </p>
    </div>

    @vite(["resources/js/app.js"])
</body>
</html>
