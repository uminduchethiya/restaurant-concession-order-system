@extends('layout.layout')

@section('layout')
<h1 class="mb-3 text-2xl font-bold text-text-white">Add/Edit Concession</h1>

<form action="{{ route('concessions.store') }}" method="POST" enctype="multipart/form-data" class="w-full max-w-2xl mx-auto mt-4">
    @csrf
    <!-- Concession Information Section -->
    <div class="p-4 rounded bg-secondary-bg">
        <h2 class="mb-2 text-xl font-semibold text-text-primary">Concession Information</h2>
        
        <!-- Concession Name -->
        <div>
            <label class="block text-sm text-text-white">Concession Name</label>
            <input type="text" name="name" class="w-full px-3 py-1 rounded bg-accent-2 text-text-white" placeholder="Enter Concession Name" required>
        </div>

        <!-- Description -->
        <div class="mt-2">
            <label class="block text-sm text-text-white">Description</label>
            <textarea name="description" class="w-full px-3 py-1 rounded bg-accent-2 text-text-white" placeholder="Enter Description"></textarea>
        </div>

        <!-- Price -->
        <div class="mt-2">
            <label class="block text-sm text-text-white">Price</label>
            <input type="number" name="price" class="w-full px-3 py-1 rounded bg-accent-2 text-text-white" placeholder="Enter Price" step="0.01" required>
        </div>

        <!-- Image Upload -->
        <div class="mt-2">
            <label class="block text-sm text-text-white">Image</label>
            <input type="file" name="image" class="w-full px-3 py-1 rounded bg-accent-2 text-text-white" required>
        </div>
    </div>

    <!-- Submit Button -->
    <div class="mt-4 text-center">
        <button type="submit" class="px-4 py-1 rounded text-text-white bg-accent-1 hover:bg-accent-2">Submit</button>
    </div>
</form>
@endsection