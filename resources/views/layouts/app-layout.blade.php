<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Es braucht uns GRÜNE : Mehr denn je!</title>
    <!-- Primary Meta Tags -->
    <title>Es braucht uns GRÜNE : Mehr denn je!</title>
    <meta name="title" content="Es braucht uns GRÜNE : Mehr denn je!" />
    <meta name="description" content="Musstest du vor Kurzem auch leer schlucken, als du die Zeitung aufgeschlagen hast? Sind wir ehrlich: Es ist ernst, die Uhr tickt. Darum: GRÜNE in den Nationalrat!" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://mehr-denn-je.ch/" />
    <meta property="og:title" content="Es braucht uns GRÜNE : Mehr denn je!" />
    <meta property="og:description" content="Musstest du vor Kurzem auch leer schlucken, als du die Zeitung aufgeschlagen hast? Sind wir ehrlich: Es ist ernst, die Uhr tickt. Darum: GRÜNE in den Nationalrat!" />
    <meta property="og:image" content="{{ asset("media/images/og_small.jpg") }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://mehr-denn-je.ch/" />
    <meta property="twitter:title" content="Es braucht uns GRÜNE : Mehr denn je!" />
    <meta property="twitter:description" content="Musstest du vor Kurzem auch leer schlucken, als du die Zeitung aufgeschlagen hast? Sind wir ehrlich: Es ist ernst, die Uhr tickt. Darum: GRÜNE in den Nationalrat!" />
    <meta property="twitter:image" content="{{ asset("media/images/og_small.jpg") }}" />

    <link rel="apple-touch-icon" sizes="144x144" href="/media/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/media/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/media/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/media/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="/media/images/favicon/safari-pinned-tab.svg" color="#84b414">
    <link rel="shortcut icon" href="/media/images/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#84b414">
    <meta name="msapplication-config" content="/media/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
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
