<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Test</title>
</head>
<body>
    <h2>Comments about candy</h2>
    @json($candy)
    <h3>Count:</h3>
    {{count($candy)}}

    <h2>Comments about call me / don't call me</h2>
    {{-- {{$call}} --}}

    <h2>Comments about who referred me</h2>
    {{-- {{$referred}} --}}

    <h2>Comments about signature requirements upon delivery</h2>
    {{-- {{$signature}} --}}

    <h2>Miscellaneous comments (everything else)</h2>
    {{-- {{$misc}} --}}
    
    <h1>EVERYTHING</h1>
</body>
</html>