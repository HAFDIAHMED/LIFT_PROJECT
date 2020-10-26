@component('mail::message')
    <div style="text-align: left">
        Un internaute vient de vous envoyer un message via le Formulaire de contact TMI-{!! config("app.name") !!}.<br>
        Nom & Prénom : {!! $devis->name !!}<br>
        Adresse : {!! $devis->address !!}<br>
        Ville : {!! $devis->city !!}<br>
        Code postal : {!! $devis->codepostal !!}<br>
        Email : {!! $devis->email !!}<br>
        Téléphone : {!! $devis->phone !!}<br>
        Obtenir un devis gratuit<br>
    </div>
    @include("mail.partials.footer")
@endcomponent
