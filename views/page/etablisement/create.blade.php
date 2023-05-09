@extends('layouts.app')
@section('content')
    

<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form wire:submit.prevent="authenticate" action="{{url('etablisements')}}" method="post">
            @csrf
            <div>
                <label for="codeEtablisement" class="block text-sm font-medium text-gray-700 leading-5">
                    Code d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="codeEtablisement" value="{{old('codeEtablisement')}}" id="codeEtablisement" name="codeEtablisement" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('codeEtablisement')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700 leading-5">
                    Nom d'etablisement
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="nom" value="{{old('nom')}}" id="nom" name="nom" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                </div>

                @error('nom')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            

            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Etablisement
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>@endsection