{{--{'bestellingen':[--}}
{{--    @foreach($bestellingen as $bestelling)--}}
{{--    {--}}
{{--        'id':{{ $bestelling->bestelling_id }}--}}
{{--    },--}}
{{--    @endforeach--}}
{{--]}--}}

<!DOCTYPE html>
<html>
<head>
    <title>Title of the document</title>
{{--    <script src="{{ asset('js/app.jsx') }}" defer></script>--}}

</head>

<body>
    <div id="app"></div>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
</body>

</html>
