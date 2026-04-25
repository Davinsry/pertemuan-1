<x-app-layout>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h2 class="text-2xl font-bold">Categories</h2>
                            <p class="text-sm text-gray-500">Kelola semua kategori produk</p>
                        </div>
                        <a href="{{ route('category.create') }}"
                           class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 shadow-sm transition">
                            + Add Category
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="mb-4 px-4 py-3 bg-green-100 border border-green-300 text-green-800 rounded-lg text-sm">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($categories->isEmpty())
                        <p class="text-center text-gray-500 py-8">Belum ada category. Tambahkan yang pertama!</p>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="bg-gray-50 dark:bg-gray-700 text-gray-600 dark:text-gray-300 uppercase text-xs">
                                    <tr>
                                        <th class="px-4 py-3 w-10">#</th>
                                        <th class="px-4 py-3">Nama Category</th>
                                        <th class="px-4 py-3 text-center">Total Product</th>
                                        <th class="px-4 py-3 text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach ($categories as $index => $category)
                                        <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50 transition">
                                            <td class="px-4 py-3 text-gray-500">{{ $index + 1 }}</td>
                                            <td class="px-4 py-3 font-medium">{{ $category->name }}</td>
                                            <td class="px-4 py-3 text-center">
                                                <span class="px-2.5 py-1 text-xs font-semibold bg-indigo-100 text-indigo-800 dark:bg-indigo-900 dark:text-indigo-200 rounded-full">
                                                    {{ $category->products_count }}
                                                </span>
                                            </td>
                                            <td class="px-4 py-3 text-right">
                                                <div class="flex items-center justify-end gap-2">
                                                    <a href="{{ route('category.edit', $category) }}"
                                                       class="px-3 py-1.5 text-xs font-medium text-white bg-yellow-500 rounded hover:bg-yellow-600 transition">
                                                        Edit
                                                    </a>
                                                    <form action="{{ route('category.delete', $category->id) }}" method="POST"
                                                          onsubmit="return confirm('Hapus category ini?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                                class="px-3 py-1.5 text-xs font-medium text-white bg-red-500 rounded hover:bg-red-600 transition">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
