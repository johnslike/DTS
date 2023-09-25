@include('../partials/header', [$title])

@php
    $array = array('title' => 'Documents Tracking System');
@endphp

{{-- automatic read in components folder --}}
<x-nav :data="$array"/>


<header class="max-w-lg mx-auto">
    <a href="">
        <h1 class="text-4xl font-bold text-white text-center">
            {{-- {{$title}} --}}
            Edit {{$document -> subject}}
        </h1>
    </a>
</header>

<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2x1">

    <section class="mt-1">
        <form action="/document/{{$document -> id}}" method="POST" class="flex flex-col">
            @method('PUT')
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="tracking_no" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Tracking No</label>
                <input type="number" name="tracking_no" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{$document -> tracking_no}}">
                    @error('tracking_no')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                    @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="subject" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Subject</label>
                <input type="text" name="subject" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{$document -> subject}}">
                    @error('subject')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                    @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="type" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Type</label>
                <select type="text" name="type" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">
                    <option value="" {{$document -> type == "" ? 'selected' : ''}}>--Select--</option>
                    <option value="DTR" {{$document -> type == "DTR" ? 'selected' : ''}}>DTR</option>
                    <option value="DB" {{$document -> type == "DB" ? 'selected' : ''}}>DB</option>
                </select>
                    @error('type')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                    @enderror
            </div>
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="remarks" class="block text-gray 700 text-sm font-bold mb-2 ml-3">Remarks</label>
                <input type="text" name="remarks" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{$document -> remarks}}">
                    @error('remarks')
                        <p class="text-red-500 text-xs p-2">
                            {{$message}}
                        </p>
                    @enderror
            </div>
            <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl tansition duration-200 mb-2" type="submit">Update</button>
        </form>

        <form action="/document/{{$document -> id}}" method="POST">
            @method('delete')
            @csrf
            <button class="w-full bg-red-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl tansition duration-200 mb-2" type="submit">Delete</button>
        </form>
    </section>
</main>


@include('../partials/footer')