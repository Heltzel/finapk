<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">Roles Manager
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg  bg-slate-700">
                <!-- component -->
                <!-- responsive table-->
                <div class="mx-4 mt-2 mb-4">
                    <table class="w-full mx-auto table-auto">
                        <thead class="justify-between">
                            <tr class="bg-slate-900">
                                <th class="px-16 py-2 text-left">
                                    <span class="text-yellow-400 font-semibold  ">Name</span>
                                </th>
                                <th class="px-16 py-2 text-left">
                                    <span class="text-yellow-400 font-semibold">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-slate-600 text-gray-200">
                            @foreach ($roles as $role)
                                <tr class="bg-slate-600 border-b-2 border-gray-500">
                                    <td class="px-16 py-2 flex flex-row items-center">
                                        <span>{{ $role->name }}</span>
                                    </td>
                                    <td class="px-16 py-2">
                                        <span class="text-yellow-500 flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700 mx-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                <path fill-rule="evenodd"
                                                    d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-700"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
