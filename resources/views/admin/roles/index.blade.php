<x-admin-layout>
    <div class="max-w-6xl mx-auto mt-12">
        <div class="flex justify-end p-2 m-2">
            <a href="{{ route('admin.roles.create') }}" class="px-4 py-2 bg-indigo-400 rounded hover:bg-indigo-600">
                New Role
            </a>
        </div>
        <div class="relative overflow-x-auto bg-gray-200 shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Permissions
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $role->id }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $role->name }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                @forelse ($role->permissions as $rp)
                                    <span class="p-1 m-1 bg-indigo-300 rounded">{{ $rp->name }}</span>
                                @empty
                                    <span class="text-sm text-gray-300">No Permissions</span>
                                @endforelse
                            </th>
                            <td class="px-6 py-4 text-right">
                                <div class="flex space-x-2">
                                    <a href="{{ route('admin.roles.edit', $role->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit
                                    </a>
                                    <form method="POST" action="{{ route('admin.roles.destroy', $role->id) }}"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</x-admin-layout>
