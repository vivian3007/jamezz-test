<!DOCTYPE html>
<html>
<head>
    <title>Bestellingen</title>
{{--    <script src="{{ asset('js/app.jsx') }}" defer></script>--}}

</head>

<body>
    @if(isset($totalOrderValue))
        <script>
            console.log("{{ json_encode($totalOrderValue)  }}");
            let array = JSON.parse("{{ json_encode($totalOrderValue)  }}")
        </script>
    @endif
    @if(isset($averageOrderValue))
        <script>
            console.log("{{ json_encode($averageOrderValue)  }}");
            let array = JSON.parse("{{ json_encode($averageOrderValue)  }}")
        </script>
    @endif
    @if(isset($popularArray))
        <script>
            let array = JSON.parse("{{ json_encode($popularArray)  }}")
        </script>
    @endif

    <div id="app"></div>

    @viteReactRefresh
    @vite('resources/js/app.jsx')
</body>

</html>
