<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>

<body>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div>
            <input type="hidden" value="2" name="user_id">
            <input type="text" name="title" placeholder="TItle"><br>
            <textarea name="description" placeholder="description"></textarea><br>
            <button type="submit">Submit</button>
        </div>
    </form>

</body>

</html>
