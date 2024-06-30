<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="text-2xl font-bold mb-2 text-[#1e0e4b] text-center">Add a <span class="text-[#7747ff]">Book</span> to Librery</div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900" style="margin-left: 25%;">
                    <div class="max-w-md relative flex flex-col p-4 rounded-md text-black bg-white">
                        <form class="flex flex-col gap-3" method="POST" action="{{ route('book.store') }}">
                            @csrf
                            <div class="block relative"> 
                                <label for="name" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Name</label>
                                <input type="text" name="name" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2  ring-gray-900 outline-0"> 
                            </div>
                            <div class="block relative"> 
                                <label for="author" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Author</label>
                                <input type="text" name="author" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                            
                            </div>
                            <div class="block relative"> 
                                <label for="description" class="block text-gray-600 cursor-text text-sm leading-[140%] font-normal mb-2">Description</label>
                                <input type="text" name="description" class="rounded border border-gray-200 text-sm w-full font-normal leading-[18px] text-black tracking-[0px] appearance-none block h-11 m-0 p-[11px] focus:ring-2 ring-offset-2 ring-gray-900 outline-0">
                            
                            </div>
                            <button type="submit" class="bg-[#7747ff] w-max m-auto px-6 py-2 rounded text-white text-sm font-normal">Submit</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>