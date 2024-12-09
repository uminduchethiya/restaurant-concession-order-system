<aside id="sidebar"
class="w-64 h-screen overflow-y-hidden font-mono text-xl text-white transition-all duration-300 bg-secondary-bg">
<nav class="p-4 space-y-2">
    <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-white rounded hover:bg-accent-1 active">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2 text-white"
            viewBox="0 0 20 20" fill="currentColor">
            <path d="M10 2a1 1 0 011 1v14a1 1 0 01-2 0V3a1 1 0 011-1z" />
            <path d="M5 8a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" />
        </svg>
        Dashboard
    </a>
    <a href="{{ route('conession_view') }}" class="block px-4 py-2 text-white rounded hover:bg-accent-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2 text-white"
            viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M6 2a1 1 0 00-.993.883L5 3v12.707l3.146-3.147a.5.5 0 01.708 0l3.146 3.147V3a1 1 0 00-1-1H6z" />
            <path fill-rule="evenodd" d="M4.5 1a.5.5 0 00-.5.5v17.793l4-4 4 4V1.5a.5.5 0 00-.5-.5h-7z"
                clip-rule="evenodd" />
        </svg>
        Concession
    </a>
    <a href="" class="block px-4 py-2 text-white rounded hover:bg-accent-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2 text-white"
            viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm6 4a.5.5 0 11-1 0 .5.5 0 011 0z" />
        </svg>
        Services
    </a>
    {{-- <a href="#" class="block px-4 py-2 text-white rounded hover:bg-accent-1">Primary Key 1</a>
    <a href="#" class="block px-4 py-2 text-white rounded hover:bg-accent-1">Primary Key 2</a>
    <a href="#" class="block px-4 py-2 text-white rounded hover:bg-accent-1">Primary Key 3</a> --}}
</nav>
</aside>