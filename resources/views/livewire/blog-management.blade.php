
<div dir ="rtl">
    <div class="m-16 mx-auto bg-white shadow-md rounded-md overflow-hidden">
        @if (session()->has('message'))
            <div role="alert">
                <div class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-white-500">
                    <p> {{ session('message') }}</p>
                </div>
            </div>
        @endif
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-xs text-gray-500 ">عنوان</th>
                    <th class="px-6 py-3 text-xs text-gray-500 ">نویسنده
                    </th>
                    <th class="px-6 py-3 text-xs text-gray-500 ">تاریخ
                        ایجاد
                    </th>
                    <th class="px-6 py-3 text-xs text-gray-500 ">تاریخ
                        به روزرسانی
                    </th>
                    <th class="px-6 py-3 text-xs text-gray-500 ">تاریخ
                        انقضا
                    </th>
                    <th class="px-6 py-3 text-xs text-gray-500 ">عملیات
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($blogs as $blog)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $blog->title }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $blog->username }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $blog->created_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $blog->updated_at }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $blog->expire_date }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="/show/{{ $blog->id }}" wire:navigate
                                class="text-blue-500 hover:text-blue-700 ml-2">مشاهده</a>
                            <a href="/edit/{{ $blog->id }}" wire:navigate
                                class="text-green-500 hover:text-green-700 ml-2">ویرایش</a>
                            <button wire:click="delete({{ $blog->id }})"
                                class="text-red-500 hover:text-red-700">حذف</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div dir="ltr">
            {{ $blogs->links() }}
        </div>
    </div>
</div>
