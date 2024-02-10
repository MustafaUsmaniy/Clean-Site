<x-layouts.main>
    <x-slot:title>
        Edit a post - {{$post->id}}
    </x-slot:title>
    <x-page-header>
        <x-slot:text>
            Edit a post - {{$post->id}}
        </x-slot:text>
        <x-slot:dislink>
            Edit a post - {{$post->id}}
        </x-slot:dislink>
    </x-page-header>
    <div class="bg-light rounded p-5">
        <h3 class="mb-4 section-title">Create a post</h3>
        <form accept="{{route('posts.update', ['post'=>$post->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                        id="title" value="{{$post->title}}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" 
                    id="description" value="{{ $post->description }}">
                </div>
            </div>
            <div class="form-group">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control @error('photo') is-invalid @enderror" name="photo" type="file" id="formFile">
            </div>

            <div class="form-group">
                <label for="message">Content</label>
                <textarea id="message" cols="30" rows="5" name="content" 
                class="form-control @error('content') is-invalid @enderror" value="{{ $post->content}}"></textarea>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Submit" class="btn btn-primary">
                <a href="{{route('posts.show', ['post'=>$post->id])}}" class="btn btn-success">Cancel</a>
            </div>
        </form>
    </div>
</x-layouts.main>
