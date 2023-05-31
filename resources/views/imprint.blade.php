@extends('layouts.mainLayout')

<!--

Betreiber:in der Website: Gib den Namen deines Unternehmens an. Falls eine natürliche Person Betreiber bzw. Betreiberin der Seite ist, musst du hier Vor- und Nachname aufführen.
Anschrift: In dein Impressum gehört außerdem die vollständige, ladungsfähige Adresse bzw. der Sitz deines Unternehmens. Beachte dabei unbedingt, dass Postfächer nicht ausreichend sind!
Vertretung des Unternehmens: Um der Impressumspflicht zu genügen, musst du darüber hinaus Angaben über die Vertretungsberechtigten machen, also über vertretungsberechtigte Gesellschafter:innen (gilt für GbR, OHG Einzelunternehmer), Geschäftsführer:innen (gilt für GmbHs) oder Vorstände (bei AGs). Auch Angaben zum Kapital können hierbei wichtig werden.
Identifikationsnummern: Sofern eine Umsatzsteueridentifikationsnummer bzw. Wirtschafts-Identifikationsnummer vergeben wurde, müssen diese im Impressum angeben werden.
Kontakt im Impressum: Wenn du dein Impressum erstellst, gehört die Angabe über Kontaktmöglichkeiten zur Pflichtangabe. Die E-Mail-Adresse ist dabei immer anzugeben. Zusätzlich muss mit der Telefon- oder Faxnummer oder einer elektronischen Abfragemaske noch ein weiteres Kommunikationsmittel angeboten werden. Beachte hierbei übrigens, dass Mehrwertdienste-Rufnummern im Impressum nicht ausreichen!
Aufsichtsbehörde als Pflichtangabe: Als Makler:in, Steuerberater:in, Gastronom:in, Anwalt bzw. Anwältin etc. musst du außerdem deine zuständige Zulassungsbehörde mit Anschrift im Impressum aufführen.
Registereintrag: Du hast einen Eintrag im Vereinsregister, Handelsregister, Partnerschaftsregister oder Genossenschaftsregister? Dann darfst du Angaben darüber inklusive Registernummer nicht vergessen. Auch wenn du einen Eintrag im Gewerberegister hast, könnte das laut einigen Expert:innen für dich notwendig werden. Auch wenn du aus dem Ausland agierst und in Deutschland aktiv bist, muss eine Angabe zum ausländischen Gesellschaftsregister und die Registernummer aufgeführt werden.
Freiberufler:innen: Auch Personen, die freiberuflich arbeiten wie Ärzte und Ärztinnen, Rechtsanwälte oder Rechtsanwältinnen sowie Ergotherapeut:innen müssen spezielle Angaben darlegen. So muss deine Standeskammer, die Angabe der gesetzlichen Berufsbezeichnung, die Bezeichnung der berufsrechtlichen Regeln und wie diese zugänglich sind im Impressum Erwähnung finden.
Abwicklung & Liquidation: Im Falle der Abwicklung oder Liquidation haben Aktiengesellschaften, Kommanditgesellschaften auf Aktien und Gesellschaften mit beschränkter Haftung eine Informationspflicht im Impressum.

-->

@section('content')
    <div class="m-10">
        <h1 class="text-3xl font-bold my-5">Impressum</h1>

        <div class="flex flex-col ml-5">
            <h2 class="text-xl font-semibold">Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
            <div class="flex flex-col ml-5">
                <p>Baran &Ouml;zbey<br />
                    Gl&uuml;ckaufstr.19<br />
                    52531 &Uuml;bach-Palenberg</p>
            </div>
            <h2 class="text-xl font-semibold">Kontakt</h2>
            <div class="flex flex-col ml-5">
                <p>Telefon: 01637257031<br />
                    E-Mail: Baran.ozbeyy02@gmail.com</p>
            </div>

            <h2 class="text-xl font-semibold">EU-Streitschlichtung</h2>
            <p class="ml-5">Die Europ&auml;ische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr/</a>.<br /> Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>

            <h2 class="text-xl font-semibold">Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h2>
            <p class="ml-5">Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

            <p class="text-xl font-semibold">Quelle: <a class="text-base font-medium" href="https://www.e-recht24.de/impressum-generator.html">https://www.e-recht24.de/impressum-generator.html</a></p>
        </div>
    </div>
@endsection
