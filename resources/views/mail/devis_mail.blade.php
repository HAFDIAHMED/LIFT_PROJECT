@component('mail::message')
    <div style="text-align: justify">
        Nous avons le plaisir de vous communiquer votre devis en pièce jointe accompagné de sa
        documentation commerciale. Un de nos conseillers va vous contacter dans les prochains jours pour
        faire le point sur votre dossier.<br>
        Bien Cordialement<br>
        Le Service Client<br>
    </div>
    @include("mail.partials.footer")
@endcomponent
