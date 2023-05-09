
@extends('layouts.app')
@section('content')
<a href="{{url('etablisements/create')}}" class="py-2.5 px-5 mt-8 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 
dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ajouter Etablisement</a>
<div class="relative overflow-x-auto mt-8 sm:mx-auto sm:w-full ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Code d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom d'Etablisement
                </th>
                <th scope="col" class="px-6 py-3">
                    Nom de le directeur
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                @forelse ($etablisements as $etablisement)
                <td class="px-6 py-4">
                    {{$etablisement->codeEtablisement}}
                </td>
                <td class="px-6 py-4">
                    {{$etablisement->nom}}
                </td>
                <td class="px-6 py-4">
                    {{-- {{$etablisement->materials}} --}}
                </td>
                <td>
                    <a href="{{url('etablisements/'.$etablisement->id.'/edit')}}">edit</a>
                </td>
                <td>
                    <x-delete url="{{'etablisements/'.$etablisement->id}}"/>
                </td>
                @empty
                    
                @endforelse
                
            </tr>
            
        </tbody>
    </table>
</div>

@endsection