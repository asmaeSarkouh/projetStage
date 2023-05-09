
@extends('layouts.app')
@section('content')
<a href="{{url('materials/create')}}" class="py-2.5 px-5 mt-8 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 
dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Ajouter Etablisement</a>
<div class="relative overflow-x-auto mt-8 sm:mx-auto sm:w-full ">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date Livrision
                </th>
                <th scope="col" class="px-6 py-3">
                    Lieu
                </th>
                <th scope="col" class="px-6 py-3">
                    Etat
                </th>
                <th scope="col" class="px-6 py-3">
                    probleme
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($materials as $material)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               
                <td class="px-6 py-4">
                    {{$material->dateLivrision}}
                </td>
                <td class="px-6 py-4">
                    {{$material->lieu}}
                </td>
                <td class="px-6 py-4">
                    {{$material->etat}}
                </td>
                <td class="px-6 py-4">
                    {{$material->probleme}}
                </td>
                <td class="px-6 py-4">
                    {{-- {{$etablisement->materials}} --}}
                </td>
                <td>
                    <a href="{{url('materials/'.$material->id.'/edit')}}">edit</a>
                </td>
                <td>
                    <x-delete url="{{'materials/'.$material->id}}"/>
                </td>
                
                
            </tr>
            @empty
                    
                @endforelse
        </tbody>
    </table>
</div>

@endsection