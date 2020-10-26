@component('mail::message')
    <div style="text-align: justify">
        &nbsp;&nbsp;Suite à votre demande nous vous communiquons la documentation souhaitée en pièce jointe. Pour
        obtenir plus d’informations vous pouvez nous contacter au 0041 22 566 86 17 ou alors vous pouvez
        directement créer votre devis en cliquant sur le lien <a href="{!! config("app.url")."/devis-immediat" !!}">{!! config("app.name") !!}</a> .<br>
        Nous espérons avoir répondu à votre attente et attendons de vos nouvelles très bientôt.<br>
        Cordialement <br>
        Le Service Commercial<br>
    </div>
    @include("mail.partials.footer")
@endcomponent
