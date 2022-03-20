<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Demo load view</h1>
    @foreach ($posts as $item)
        <p>{{$item->name}}</p>
    @endforeach
    <p>{{config('general.name')}}</p>
    <p>{{config('general.email')}}</p>
    <p>{!!example_helper_func()!!}</p>
        <p>{{ trans('post::generic.name') }}</p>
</body>
</html>
