{'bestellingen':[
    @foreach($bestellingen as $bestelling)
    {
        'id':{{ $bestelling->bestelling_id }}
    },
    @endforeach
]}
