Есть контакт!
Имя {{ $contact->name }}
Email {{ $contact->email }}
Телефон {{ $contact->telephone }}

Сообщение: <br/>
{!! $contact->comment !!}

Спасибо,
{{ config('app.name') }}
