@extends('layouts.app')
@section('content')

<div class="mt-8 sm:mx-auto sm:w-full sm:min-w-md">
    <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
        <form wire:submit.prevent="authenticate" action="{{url('materials')}}" method="post">
            @csrf
            <div>
                <label for="dateLivrision" class="block text-sm font-medium text-gray-700 leading-5">
                    Date Lirision
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="dateLivrision" value="{{old('dateLivrision')}}" id="dateLivrision" name="dateLivrision" type="date" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('dateLivrision') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" >
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
                        {{old('description')}}
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
                   <option value="Direction"  @if( old('lieu')  == 'Direction') selected="selected" @endif>Direction</option>
                   <option value="Bibliotheque"  @if( old('lieu')  == 'Bibliotheque') selected="selected" @endif>Bibliotheque</option>
                   <option value="SMM"  @if( old('lieu')  == 'SMM') selected="selected" @endif>SMM</option>
                   <option value="Salle de eouvr"  @if( old('lieu')  == 'Salle de eouvr') selected="selected" @endif>Salle de eouvr</option>
                   <option value="Labo"  @if( old('lieu')  == 'Lab') selected="selected" @endif>Labo</option>
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
                        @if( old('type_id')  == $type->id) selected="selected" @endif>
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
                    <input wire:model.lazy="etat" value="checked" id="etat" name="etat"
                    {{-- @if( old('etat')  == 1) checked="" @endif  --}}
                     type="checkbox" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" >
                </div>
            </div>
            <div class="form-group" id="myInputDiv" style="display:none">
                <label for="probleme" class="block text-sm font-medium text-gray-700 leading-5">
                    Probleme
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                    <input wire:model.lazy="probleme" value="{{old('probleme')}}" id="probleme" name="probleme" type="text"  
                     class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" >
                </div>
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
</div>
@endsection