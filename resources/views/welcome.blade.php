<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <livewire:ola-mundo mensagem="Olá Mundo, Treinaweb" />
        @livewire('ola-mundo', ['mensagem' => 'Olá mundo 2'])

        <livewire:saudacao />
        @livewire('saudacao')
    </body>
</html>
