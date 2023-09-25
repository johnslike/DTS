<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title !== "" ? $title : 'Document Tracking System' }}</title>

    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="bg-gray-600 min-h-screen pt-12 pb-6 px-2">
<x-messages />