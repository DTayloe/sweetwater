<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comment Test</title>
</head>
<body>
    <h2>Comments about candy ({{count($candy)}})</h2>
    @foreach ($candy as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach

    <h2>Comments about call me / don't call me ({{count($call)}})</h2>
    @foreach ($call as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach

    <h2>Comments about who referred me ({{count($referred)}})</h2>
    @foreach ($referred as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach

    <h2>Comments about signature requirements upon delivery ({{count($signature)}})</h2>
    @foreach ($signature as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach

    <h2>Miscellaneous comments (everything else) ({{count($misc)}})</h2>
    @foreach ($misc as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach
    
    <h2>Remove these ({{count($remove)}})</h2>
    @foreach ($remove as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach

    <h1>EVERYTHING ({{count($all)}})</h1>
    @foreach ($all as $item)
        <ul>
            <li>{{$item}}</li>
        </ul>
    @endforeach
</body>
</html>