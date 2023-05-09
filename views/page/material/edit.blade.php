@extends('layouts.app')
@section('content')
    

<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form wire:submit.prevent="authenticate" action="{{url('materials/'.$material->id)}}" method="post">
            @csrf
            @method('put')
            <div>
                <label for="dateLivrision" class="block text-sm font-medium text-gray-700 leading-5">
                    Date Lirision
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="dateLivrision" value="{{$material->dateLivrision}}" id="dateLivrision" name="dateLivrision" type="date" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('dateLivrision') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" >
                </div>

                @error('dateLivrision')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 leading-5">
                    Description
                </label>

                <div class="mt-1 rounded-md shadow-sm">
                    <textarea id="description" name="description" rows="3" 
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        {{$material->description}}
                    </textarea>
          
                </div>

                @error('descriptin')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <label for="lieu" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                  <select id="lieu" name="lieu" autocomplete="lieu-name" 
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option>select type</option>
                   <option value="1"  {{ $material->lieu == 1 ? 'selected' : '' }}>Direction</option>
                   <option value="2"  {{ $material->lieu == 2 ? 'selected' : '' }}>Bibliotheque</option>
                   <option value="3"  {{ $material->lieu == 3 ? 'selected' : '' }}>SMM</option>
                   <option value="4"  {{ $material->lieu == 4 ? 'selected' : '' }}>Salle de eouvr</option>
                   <option value="5"  {{ $material->lieu == 5 ? 'selected' : '' }}>Labo</option>
                  </select>
                </div>
                @error('lieu')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            
            <div class="">
                <label for="type_id" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-2">
                  <select id="type_id" name="type_id" autocomplete="type_id-name" 
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option>select type</option>
                    @foreach ($types as $type)
                    <option value="{{$type->id}}"
                        @if( old('type_id')  == $type->id) 
                        {{ $currentType == $type->id ? 'selected' : '' }}
                        @endif>
                        {{$type->title}}</option>
                    @endforeach
                  </select>
                </div>
                @error('type_id')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              
              <div class="form-group">
                <label for="etat" class="block text-sm font-medium text-gray-700 leading-5">
                    etat
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="etat" value="{{old('etat')}}" id="etat" name="etat" type="checkbox"  autofocus class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600 @error('etat') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" >
                </div>
            </div>
            <div class="form-group" id="myInputDiv" style="display:none">
                <label for="probleme" class="block text-sm font-medium text-gray-700 leading-5">
                    Probleme
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="probleme" value="{{old('probleme')}}" id="probleme" name="probleme" type="text"  autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('probleme') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" >
                </div>
            </div>
            <div class="mt-6">
                <span class="block w-full rounded-md shadow-sm">
                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Ajouter Material
                    </button>
                </span>
            </div>
        </form>
    </div>
</div>@endsection