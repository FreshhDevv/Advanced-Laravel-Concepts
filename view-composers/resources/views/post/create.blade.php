<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Post</title>
</head>

<body>
    <form action="#">
        <select name="channel_id" id="channel_id">
            @foreach ($channels as $channel)
            <option value="{{$channel->id}}">{{$channel->name}}</option>
            @endforeach
        </select>
    </form>
</body>

</html>