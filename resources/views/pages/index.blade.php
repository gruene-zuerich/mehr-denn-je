@php
    use Carbon\Carbon;
    $diff = Carbon::parse()->now()->diffInDays(Carbon::parse()->parse('2023-10-22'));
@endphp
<x-app-layout>
    <x-header />
    <p class="text-lg mdj-container mdj-container__small mt-14">
        Musstest du vor Kurzem auch leer schlucken, als du die Zeitung aufgeschlagen hast? <b>Eine neue Studie kommt zum Schluss, dass der Golfstrom, einer der wichtigsten Klima-Regulatoren unseres Planeten, schon in wenigen Jahren zum Stillstand kommen könnte.</b> Wenn wir mit unseren Freund*innen sprechen, wird uns oft gesagt, dass wir nicht so alarmistisch sein sollen. Aber sind wir ehrlich: <b>Es ist ernst, die Uhr tickt.</b>
    </p>
    <div class="img-wrapper mdj-container mdj-container__large my-10">
        <img src="/media/images/zeitungsschnippsel.jpg" alt="Newspaper Clippings of climate crisis">
    </div>
    <p class="text-lg mdj-container mdj-container__small">
        Wenn wir uns in der Schweiz umschauen, sehen wir, dass es noch viel zu tun gibt; nicht nur in der Umweltpolitik, sondern auch gegen die steigenden Lebenskosten, gegen die wachsenden Ungleichheit, für die Rechte von Menschen mit Behinderungen und für die Gleichstellung aller Geschlechter. In all diesen Bereichen braucht es GRÜNE Politik: <b>Jetzt mehr denn je.</b>
    </p>
    <p class="text-lg mdj-container mdj-container__small">
        <b>Bis zum eidgenössischen Wahlsonntag dauert es noch {{ $diff }} Tage.</b> Diesmal gibt es eine Neuerung: Zum ersten Mal müssen alle Parteien ihre Kassenbücher offenlegen. <b>Der SVP-Wahlkampfleiter protzt mit mindestens 4.5 Millionen Franken, die sie ausgeben werden.</b> Mit so einem Budget können wir nicht mithalten. Was wir aber mit Sicherheit sagen können: <b>Wir sind die Partei der Menschen, nicht der Grosskonzerne und Lobbys.</b>
    </p>
    <div class="img-wrapper mdj-container mdj-container__small my-10">
        <x-budget-graph />
        <p class="text-xs text-end mt-2"><b>Quelle:</b> Tagesanzeiger</p>
    </div>
    <p class="text-lg mdj-container mdj-container__small">
        Damit wir im Oktober einen Rechtsrutsch verhindern können, sind wir auf das Engagement von Menschen wie dir angewiesen. <b>Hilfst du uns, unsere GRÜNE Vision zu verwirklichen?</b>
    </p>
    <div class="mdj-container mdj-container__large">
        <div class="mdj-support-boxes">
            <x-support-box
                title="Unsere Wahlzeitung in allen Zürcher Haushalten!"
                button="Ja, ich spende!"
                link="/spenden"
            >
                Mit unserer Wahlzeitung wollen wir unsere GRÜNE Vision, unsere Kandidierenden und unseren Plan für Zürich in alle Zürcher Haushalte tragen. Dazu fehlt uns aber das Geld. Kannst du uns mit einer Spende unterstützen?
            </x-support-box>
            <x-support-box
                title="Machen wir die Klimawahl 2023 gemeinsam zum Erfolg!"
                button="Ja, ich mache mit!"
                link="https://avanti-verdi.ch/"
            >
                Es braucht mehr GRÜNE im Parlament – fürs Klima, für eine diskriminierungsfreie Gesellschaft und für die Biodiversität. Mit avanti-verdi.ch organisieren wir unseren Wahlkampf. Melde dich jetzt an!
            </x-support-box>
            <x-support-box
                title="Werde Teil von unserer Grünen Bewegung!"
                button="Ja, ich werde Mitglied!"
                link="https://gruenezuerich.ch/mitglied-werden"
            >
                Wir sind die Partei der Menschen, nicht der Grosskonzerne und Lobbygruppen. Unsere Bewegung besteht aus Menschen wie dir, die zusammen unsere Ziele für eine GRÜNE Welt verfolgen. Werde Mitglied und hilf uns, diese Welt zu erschaffen!
            </x-support-box>
        </div>
    </div>
</x-app-layout>
