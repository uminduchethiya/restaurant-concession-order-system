@extends('layout.layout')

@section('layout')
    <div class="flex justify-between mb-4">
        <h1 class="mb-4 text-3xl font-bold text-white">Concessions</h1>
        <a href="{{ route('conession_addview') }}">
            <button class="px-4 py-2 text-white rounded-md bg-accent-1 hover:bg-accent-2">
                Add Concession
            </button>
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full overflow-hidden bg-white border-collapse rounded-lg shadow-md table-auto">
            <thead>
                <tr class="text-sm leading-normal text-left uppercase bg-gray-200">
                    <th class="px-6 py-3">Concession No</th>
                    <th class="px-6 py-3">Concession Name</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Image</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm font-light text-gray-600">
                <!-- Loop through concessions to display dynamic rows -->
            
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 py-3 whitespace-nowrap"></td>
                        <td class="px-6 py-3 whitespace-nowrap"></td>
                        <td class="px-6 py-3 whitespace-nowrap"></td>
                        <td class="px-6 py-3 whitespace-nowrap"></td>
                        <td class="px-6 py-3 whitespace-nowrap"></td>
                        <td class="flex justify-end py-3 space-x-2">
                            <a href="#">
                                <button class="px-3 py-1 text-white bg-blue-500 rounded-md hover:bg-blue-600">
                                    View
                                </button>
                            </a>
                            <a href="#">
                                <button class="px-3 py-1 text-white bg-yellow-500 rounded-md hover:bg-yellow-600">
                                    Edit
                                </button>
                            </a>
                            <button 
                                onclick="alert('Delete action clicked');" 
                                class="px-3 py-1 text-white bg-red-500 rounded-md hover:bg-red-600">
                                Delete
                            </button>
                        </td>
                    </tr>
             
            </tbody>
        </table>

        <div class="flex justify-center mt-4">
            <!-- Pagination Placeholder -->
            <span class="text-gray-500">Page 1 of 1</span>
        </div>
    </div>
@endsection
