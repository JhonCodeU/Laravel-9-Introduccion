@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Title</label>
<span class="text-red-500 text-xs">{{ $errors->first('title') }}</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title', $post->title) }}">

<label for="body" class="uppercase text-gray-700 text-xs">Content</label>
<span class="text-red-500 text-xs">{{ $errors->first('body') }}</span>
<textarea type="text" rows="5" name="body" class="rounded border-gray-200 w-full mb-4"
    value="{{ old('body', $post->body) }}">
{{ $post->body }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Back</a>
    <input type="submit" value="Send" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
