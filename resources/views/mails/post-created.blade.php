<div>
    <h1>Dear {{$post->user->name}}</h1>
    <h5>You created a new pos in {{$post->created_at}}</h5>\
    <p>Post id: {{$post->id}}</p>
    <h3>{{$post->title}}</h3>
    <h3>{{$post->description}}</h3>
    <h3>{{$post->content}}</h3>
    <strong>Thanks :)</strong>
</div>