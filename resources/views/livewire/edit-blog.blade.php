<div dir="rtl">

    <div class="container mx-auto mt-10">
        <div class=" bg-white p-8 rounded-md shadow-md">
            <h2 class="text-xl font-bold mb-4"> ویرایش بلاگ </h2>
            <form wire:submit="update">
                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-semibold">عنوان:</label>
                    <input type="text" wire:model="title"
                        class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-400">
                    <div>
                        @error('title')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="content" class="block text-gray-700 font-semibold">متن:</label>
                    <textarea type="text" wire:model="content" value="{{ $blog->content }}"
                        class="mt-1 px-4 py-2 w-full border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-400"></textarea>
                    <div>
                        @error('content')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label for="expire_date" class="block text-gray-700 font-semibold">تاریخ انقضا:</label>
                    <input type="date" class="form-control" wire:model="expire_date"
                        value="{{ $blog->expire_date }}">
                    <div>
                        @error('expire_date')
                            <span class="error">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">تایید</button>
                </div>
            </form>
        </div>
    </div>
</div>
