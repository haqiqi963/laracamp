<x-mail::message>
# Register Camp {{ $checkout->Camp->title }}


Hi, {{ $checkout->User->name}}
    <br>
    Thanks for register on <b>{{ $checkout->Camp->title }}</b>,
    please see payment by click the button

<x-mail::button :url="route('dashboard')">
Ny Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
