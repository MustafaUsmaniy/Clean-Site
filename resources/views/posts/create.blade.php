<x-layouts.main>
    <x-slot:title>
        Create a post
    </x-slot:title>
    <x-page-header>
        <x-slot:text>
            Create a post
        </x-slot:text>
        <x-slot:dislink>
            Create a post
        </x-slot:dislink>
    </x-page-header>
    <div class="bg-light rounded p-5">
        <h3 class="mb-4 section-title">Create a post</h3>
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-sm-6">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        id="title" value="{{ old('title') }}">
                </div>
                <div class="form-group col-sm-6">
                    <label for="description">Description</label>
                    <input type="text" name="description"
                        class="form-control @error('description') is-invalid @enderror" id="description"
                        value="{{ old('description') }}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="formFile" class="form-label">Categories</label><br>
                    <select class="form-select @error('category_id') is-invalid @enderror rounded-pill" 
                        name="category_id">
                        <option value="" selected hidden></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="formFile" class="form-label">Tags</label>
                    <label for="">(Press Ctrl together to select multiple)</label><br>
                    <select class="form-select" name="tags[]" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="formFile" class="form-label">Photo</label>
                    <input class="form-control @error('photo') is-invalid @enderror" name="photo" type="file"
                        id="formFile">
                </div>
            </div>
            <div class="form-group">
                <label for="message">Content</label>
                <textarea id="message" cols="30" rows="5" name="content"
                    class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}"></textarea>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</x-layouts.main>
