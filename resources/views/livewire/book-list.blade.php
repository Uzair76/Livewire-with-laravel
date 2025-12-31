<div class="w-full">
    <h1 class="text-3xl font-bold mb-2">Book List</h1>
    <p class="text-gray-600 mb-6">This is book list component</p>

    <!-- 3 per row -->
    <div class="grid grid-cols-3 gap-6">

        @foreach ($books as $book)
            <div
                class="relative rounded-lg shadow h-[200px] bg-cover bg-center overflow-hidden"
                style="background-image: url('{{ $book->cover_image_path }}');"
            >
                <!-- Overlay -->
                <div class="absolute inset-0 bg-black/50"></div>

                <!-- Content -->
                <div class="relative z-10 p-4 h-full flex flex-col justify-between text-white">
                    <div>
                        <h2 class="text-lg font-semibold leading-tight">
                            {{ $book->title }}
                        </h2>

                        <p class="text-sm opacity-90">
                            {{ $book->author_name }}
                        </p>
                    </div>

                    <div class="text-sm font-medium">
                        Published at : {{ $book->published_date }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
