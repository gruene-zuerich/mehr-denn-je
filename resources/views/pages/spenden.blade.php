@php

use Illuminate\Support\Facades\Http;

$response = Http::withBasicAuth(env("RNW_USER"), env("RNW_PASS"))->get("https://api.raisenow.com/epayment/api/grnes-9ecb/transactions/search?sort[0][field_name]=created&sort[0][order]=desc&filters[0][field_name]=stored_campaign_id&filters[0][type]=number&filters[0][value]=1");
$transactions = $response->json()["result"]["transactions"];
$amount = env("BASE_AMOUNT", 1245.90);
foreach ($transactions as $transaction) {
    $amount += $transaction["amount"] / 100;
}

@endphp
<x-app-layout>
    <div class="mdj-container mdj-container__small mt-4 text-center">
        <a href="/" class="flex justify-end mb-12">
            <x-logo-pos />
        </a>
        <h1 class="font-black text-5xl text-magenta uppercase mb-6">
            Spende für unseren Wahlkampf!
        </h1>
        <p class="text-lg">
            Wahlen kosten viel Geld. Das weisst du sicher. Wir wollen mit deiner Hilfe die grüne Welle in den Nationalrat tragen. Hilf uns dabei und spende für unseren Wahlkampf.
        </p>
        <div class="mdj-goal flex justify-between mt-6 mb-2">
            <span class="text-xs">0 CHF</span>
            <span class="text-xs">25'000 CHF</span>
        </div>
        <div class="mdj-progress">
            <div class="mdj-progress__bar flex justify-center items-center" data-width="{{ $amount / 25000 * 100 }}">
                <span>{{ floor($amount / 25000 * 100) }}%</span>
            </div>
        </div>
        <p>
            <b>Wir haben bisher {{ number_format($amount, 2, ",", ".") }} CHF gesammelt. Unser Ziel ist es, bis zum Eintreffen der Couverts {{ number_format(25000, 2, ",", ".") }} zusammen zu kriegen. Hilfst du uns dabei?</b>
        </p>
    <div class="rnw-widget-container mt-12"></div>
    <script src="https://tamaro.raisenow.com/grnes-c83e/latest/widget.js"></script>

    <script>
    window.rnw.tamaro.runWidget('.rnw-widget-container', {
        language: 'de',
        purposes: ['p1'],
        purposeDetails: {
            p1: {
                stored_campaign_id: 1,
            },
        },
        translations: {
            de: {
                purposes: {
                    p1: 'Nationalratswahlen - GRÜNE mehr denn je',
                },
            },
        },
        paymentFormPrefill: {
            stored_hidden_campaign_name: 'mehr_denn_je',
        },
    })
    </script>
    <style>
        :root {
            --tamaro-primary-color: #EC008C;
            --tamaro-primary-color__hover: #d378af;
            --tamaro-primary-bg-color: white;
            --tamaro-border-color: #84B414;
            --tamaro-bg-color: white;
        }
    </style>
</x-app-layout>
