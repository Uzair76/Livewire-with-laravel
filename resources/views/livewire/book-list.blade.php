<div class="w-full">
    <h1 class="text-3xl font-bold mb-2">Book List</h1>
    <p class="text-gray-600 mb-6">This is book list component</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full">
        @foreach ($books as $index => $book)
            <div class="rounded-xl p-5 shadow text-white
                {{ $index % 2 === 0 ? 'bg-indigo-600' : 'bg-emerald-600' }}">
                
                <h2 class="text-xl font-semibold mb-2">{{ $book->title }}</h2>

                <p class="text-sm"><span class="font-semibold">Author:</span> {{ $book->author_name }}</p>

                @if($book->published_date)
                    <p class="text-sm"><span class="font-semibold">Published:</span> {{ $book->published_date }}</p>
                @endif

                @if($book->summary)
                    <p class="text-sm mt-3 opacity-95">{{ $book->summary }}</p>
                @endif
            </div>
        @endforeach
    </div>
</div>
