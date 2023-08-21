@php
use Illuminate\Support\Facades\Http;
$response = Http::withBasicAuth(env("RNW_USER"), env("RNW_PASS"))->get("https://api.raisenow.com/epayment/api/grnes-9ecb/transactions/search?sort[0][field_name]=created&sort[0][order]=desc&filters[0][field_name]=stored_campaign_id&filters[0][type]=number&filters[0][value]=1");
$transactions = $response->json()["result"]["transactions"];
$amount = env("BASE_AMOUNT", 1245.90);
foreach ($transactions as $transaction) {
    $amount += $transaction["amount"] / 100;
}
@endphp
<div class="mdj-splash-blind h-full w-full fixed top-0 left-0 bg-black opacity-0 invisible z-40"></div>
<div class="mdj-splash-modal text-center min-h-screen w-screen flex justify-center items-center fixed translate-y-full top-0 left-0 z-50">
    <div class="p-4 max-w-md mx-auto">
        <div class="p-6 bg-white relative">
            <h1 class="text-2xl text-magenta uppercase font-black">Wir brauchen deine Hilfe</h1>
            <h2 class="font-semibold text-lg mb-4">Und zwar mehr denn je</h2>
            <p>Damit wir unsere Wahlzeitung in alle städtischen Haushhalte tragen können, müssen wir bis zum Eintreffen der Wahlcouverts 25'000 CHF gesammelt haben. <b>Kannst du uns mit einer Spende helfen?</b></p>
            <div class="mdj-progress mt-4">
                <div class="mdj-progress__bar flex justify-center items-center" data-width="{{ $amount / 25000 * 100 }}" data-timeout="5000">
                    <span class="text-xs">{{ floor($amount / 25000 * 100) }}%</span>
                </div>
            </div>
            <a href="/spenden" class="mdj-button w-full">Ich helfe mit!</a>
            <div class="mdj-splash-modal__close absolute top-1 right-1 font-semibold h-4 w-4 cursor-pointer">x</div>
        </div>
    </div>
</div>
