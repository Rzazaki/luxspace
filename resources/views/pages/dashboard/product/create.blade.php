<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Product &raquo; Create
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                {{-- @if($error->any())
                    <div class="mb-5" role="alert">
                            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                There's something wrong!
                            </div>
                            <div class="border border-t-8 border-red-400 rounded-b  bg-red-100 px-4 py-3 text-red-700">
                                <p>
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>
                                                {{ $error }}
                                            </li>
                                    </ul>
                                </p>
                            </div>
                    <div>
                @endif --}}
                <form action="{{ route('dashboard.product.store')}}" class="w-full" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="" class="block uppercase tracking-white text-gray-700 text-xs font-bold mb-2 ">Name</label>
                            <input type="text" value="{{ old('name')}}" name="name" class="block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 leading-tight focus:outline-non focus:bg-white focus:border-gray-500" placeholder="Product Name">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>