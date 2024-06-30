<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Librery') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-2">
                <div class="p-6 text-gray-900">
                    @foreach ($books as $book)
                        <div class="card-container">
                            <div class="card-inner">
                                <div class="card-front">
                                    <div class="card">
                                        <div class="card-image"></div>
                                        <div class="category"> {{ $book->name }} </div>
                                        <div class="heading">
                                            <div class="author"> By <span class="name">{{ $book->author }}</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                  <p style="margin-top: 10%">{{ $book->description }}</p>
                                  <div style="margin-top: 10%">
                                    <a href="" class="inline-flex items-center px-4 py-2 bg-blue-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="float: left"> Read</a>
                                    <a href="" class="inline-flex items-center px-2 py-2 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" style="margin-left: 2%;"> Dowload</a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
