<x-mail::message>
# Hola, tens un missatge nou!

<h3>Name: {{ $name }}</h3>
<h3>Last Name: {{ $lastName }}</h3>
<h3>Email: {{ $email }}</h3>
<h3>Phone: {{ $phone }}</h3>
<h3>Message: {{ $message }}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
