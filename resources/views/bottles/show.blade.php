@extends('layouts.app')
@section('content')
    <!--card-->
    @if ($errors->any())
        <div class="w-auto h-auto bg-gray-200">
            @foreach ($errors->all() as $error)
                <li class="text-red-300 ">
                    {{ $error }}
                </li>
            @endforeach
        </div>
    @endif

    @if ($message = Session::get('status'))
        <div class=" py-2 bg-auto bg-green-200">
            <p class="text-center">{{ $message }}</p>
        </div>
    
    @endif
    <div class="w-full flex items-center justify-center pt-4 py-4">
        <div class="bg-gray-100 rounded-lg shadow-lg flex-col w-5/6 sm:max-w-2xl px-6 border border-red-300">
            <div class="px-5 py-3 mb-3 text-4xl font-medium text-gray-800 mt-6">
                <div class="">{{ $bottle->appelation }} <br>{{ $bottle->cuvee_name }}</div>
            </div>
            <hr class="border-1 border-gray-300">
            <div class="flex flex-col ml-4 py-4">
                <h2 for="presentation" class=" text-justify text-gray-700 font-medium mb-2 underline text-2xl">Présentation
                </h2>
                    <div class=" grid grid-cols-3 gap-2">
                        <div>
                            <p class="font-bold text-gray-800 ">Couleur</p>
                            <p class="font-light text-gray-500">{{ $bottle->color }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Millésime</p>
                            <p class="font-light text-gray-500">{{ $bottle->vintage }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Region</p>
                            <p class="font-light text-gray-500">{{ $bottle->region }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Culture</p>
                            <p class="font-light text-gray-500">{{ $bottle->culture->label }}</p>
                        </div>
                        @if ($bottle->winemaker_id==0)
                        @else
                        <div>
                            <p class="font-bold text-gray-800 ">Nom du domaine</p>
                            <p class="font-light text-gray-500">{{$bottle->winemaker->domain_name }}</p>
                        </div>
                        @endif
                        <div>
                            <p class="font-bold text-gray-800 ">Cépage</p>
                            @foreach($bottle->grapeVarieties as $grapes)
                            <p class="font-light text-gray-500">{{$grapes->label}}</p>
                            @endforeach
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Date consommable</p>
                            <p class="font-light text-gray-500">{{ $bottle->consumable_date }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Date apogée</p>
                            <p class="font-light text-gray-500">{{ $bottle->peak_date }}</p>
                        </div>
                        <div>
                            <p class="font-bold text-gray-800 ">Date danger</p>
                            <p class="font-light text-gray-500">{{ $bottle->danger_date }}</p>
                        </div>
                    </div>
                    <!--TO DO warning relationship problem-->
        
            </div>
            <div class="flex mt-7 items-center text-center">
                <hr class="border-gray-300 border-1 w-full rounded-md">

                <hr class="border-gray-300 border-1 w-full rounded-md">
            </div>
            <div class="flex flex-col ml-4 py-4">
                <h2 for="presentation" class="text-gray-700 font-medium mb-2 underline text-2xl">Description</h2>
                <div class="flex">
                    <p class="text-gray-500 py-2 text-m">
                        {{ $bottle->description }}
                    </p>
                </div>
            </div>
            <div
                class="flex flex-col sm:flex-row justify-center sm:justify-between space-y-4 sm:space-x-0 items-center my-6">
                <div>

                </div>

                <div class="py-2 px-8"> <button type="button"
                        class="text-white bg-gradient-to-br from-red-800 to-red-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><a
                            href="{{ route('PDF', ['id' => $bottle->id]) }}">télécharger le pdf</a>
                    </button>
                </div>
            </div>
            <div class="flex mt-7 items-center text-center">
                <hr class="border-gray-300 border-1 w-full rounded-md">

                <hr class="border-gray-300 border-1 w-full rounded-md">
            </div>

            <div class="flex flex-col ml-4 py-4">
                <h2 for="avis" class="text-gray-700 font-medium mb-2 underline text-2xl">Votre avis</h2>
                <div class="flex flex-row">
                    <div class="max-w-lg shadow-md grid grid-cols-2 gap-4 ">

                        <form action="{{ route('add') }}" class="w-full p-4" method="POST">
                            @csrf
                            <div class="mb-2">
                                <input type="hidden" name="bottle_id" value="{{ $bottle->id }}">
                                <label for="comment" class="text-lg text-gray-600">Commentaire</label>
                                <textarea class="w-full h-20 p-2 border rounded focus:outline-none focus:ring-gray-300 focus:ring-1" name="comment"
                                    placeholder="laisser votre commentaire..."></textarea>
                            </div>
                            <button
                                class="px-3 py-2 text-white bg-gradient-to-br from-red-800 to-red-400 hover:bg-gradient-to-bl rounded "
                                type="submit">
                                Comment </button>
                        </form>
                        <div>
                            <div class=" px-2 py-2 ">
                                <label for="comment" class="text-lg text-gray-600">Note</label>


                                <div class="flex items-center ">
                                  
                                    <form action="{{ route('rate') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="bottle_id" value="{{ $bottle->id }}">
                                        <button type="submit" name="rating" id="rating1" value="1"><svg
                                                class="w-5 h-5 text-orange-300 hover:text-yellow-300" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg></button>
                                        <button type="submit" name="rating" id="rating1" value="2"><svg
                                                class="w-5 h-5 text-orange-300 hover:text-yellow-300" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg></button>
                                        <button type="submit" name="rating" id="rating1" value="3"><svg
                                                class="w-5 h-5 text-orange-300 hover:text-yellow-300" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg></button>
                                        <button type="submit" name="rating" id="rating1" value="4"><svg
                                                class="w-5 h-5 text-orange-300 hover:text-yellow-300" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg></button>
                                        <button type="submit" name="rating" id="rating1" value="5"><svg
                                                class="w-5 h-5 text-orange-300 hover:text-yellow-300" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg></button>
                                    </form>
                                    
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
