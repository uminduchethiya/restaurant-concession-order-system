@extends('layout.layout')

@section('layout')
    <div class="flex items-center justify-between mb-4">
        <div>
            <p class="text-lg font-semibold text-white">Dashboard</p>
        </div>
    </div>
    <form action="" method="POST" class="mt-5 flex w-full">
        @csrf
        <input type="text" class="w-1/4 p-2 h-10 border-r border-black" placeholder="Client Number" name="client" id="">
        <input type="text" class="w-1/4 p-2 h-10 border-r border-black" placeholder="Account Number" name="account" id="">
        {{-- <input type="text" class="w-1/5 p-2 h-10 border-r border-black" placeholder="" name="" id=""> --}}
        {{-- <input type="text" class="w-1/5 p-2 h-10" placeholder="" name="" id=""> --}}
        <button class="w-1/4 h-10 font-semibold text-white bg-accent-1 hover:bg-accent-2 focus:outline-none focus:bg-accent-2 transition duration-200 border">Search</button>
    </form>
    <div class="mt-10 ">
        <div class="flex gap-10 space-x-4">
            <div
                class="items-center w-1/4 p-5 duration-300 bg-gray-100 border border-gray-300 shadow-md rounded-xl hover:-translate-y-1 hover:scale-110">
                <div class="flex ">
                    <img src="{{ asset('images/icons/icons_clients.png') }}" class="w-20 h-20 my-auto" alt="">
                    <div class="w-4/5 ml-3">
                        <h2 class="text-4xl font-bold text-gray-800 cursor-default"></h2>
                        <p class="text-2xl text-gray-600 cursor-default">All Clients</p>
                    </div>
                </div>
            </div>

            <div
                class="items-center w-1/4 p-5 duration-300 bg-gray-100 border border-gray-300 shadow-md rounded-xl hover:-translate-y-1 hover:scale-110">
                <div class="flex">
                    <img src="{{ asset('images/icons/icons_accounts.png') }}" class="w-20 h-20 my-auto" alt="">
                    <div class="w-4/5 ml-3">
                        <h2 class="text-4xl font-bold text-gray-800 cursor-default"></h2>
                        <p class="text-2xl text-gray-600 cursor-default">All Accounts</p>
                    </div>
                </div>
            </div>

            <div
                class="items-center w-1/4 p-5 duration-300 bg-gray-100 border border-gray-300 shadow-md rounded-xl hover:-translate-y-1 hover:scale-110">
                <div class="flex">
                    <img src="{{ asset('images/icons/icons_services.png') }}" class="w-20 h-20 my-auto" alt="">
                    <div class="w-4/5 ml-3">
                        <h2 class="text-4xl font-bold text-gray-800 cursor-default"></h2>
                        <p class="text-2xl text-gray-600 cursor-default">Services</p>
                    </div>
                </div>
            </div>

            <div
                class="items-center w-1/4 p-5 duration-300 bg-gray-100 border border-gray-300 shadow-md rounded-xl hover:-translate-y-1 hover:scale-110">
                <div class="flex">
                    <img src="{{ asset('images/icons/icons_invoice.png') }}" class="w-20 h-20 my-auto" alt="">
                    <div class="w-4/5 ml-3">
                        <h2 class="text-4xl font-bold text-gray-800 cursor-default">33</h2>
                        <p class="text-2xl text-gray-600 cursor-default">Invoices</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
