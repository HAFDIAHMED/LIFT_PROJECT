@component('mail::message')
    <div style="text-align: left">
        Un client vient de vous envoyer un message via le Formulaire de contact TMI-{!! config("app.name") !!}.<br>
        Nom & Prénom : {!! $contact->first_name  !!}  {!! $contact->last_name  !!} <br>
        lieu de chantier :{!! $contact->location !!} <br>  
        Email :  {!! $contact->email !!} <br>
        Téléphone : {!! $contact->phone !!} <br> 
    </div>
    @include("mail.partials.footer")
@endcomponent

 
