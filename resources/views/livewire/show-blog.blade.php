<div>

    <div class="bg-white rounded-lg overflow-hidden shadow-md text-center">
        <div class="bg-gray-200 px-4 py-2">
            {{ $blog->user_id }}
        </div>
        <div class="px-6 py-4">
            <h5 class="font-bold text-xl mb-2"> {{ $blog->title }}
            </h5>
            <p class="text-gray-700 text-base"> {{ $blog->content }}
            </p>
            <a href="/edit/{{ $blog->id }}"
                class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                ویرایش</a>
        </div>
        <div class="bg-gray-200 px-4 py-2">
            {{ $blog->updated_at }}

        </div>
    </div>


</div>
