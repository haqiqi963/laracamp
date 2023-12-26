<x-mail::message>
# Register Camp {{ $checkout->Camp->title }}


Hi, {{ $checkout->User->name}}
    <br>
    Thanks for register on <b>{{ $checkout->Camp->title }}</b>,
    please see payment by click the button

<x-mail::button :url="route('user.checkout.invoice', $checkout->id)">
Get Invoice
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
