

@include('../partials/header', ['title' => 'Documents'])

@php
    $array = array('title' => 'Documents Tracking System');
@endphp

{{-- automatic read in components folder --}}
<x-nav :data="$array"/>
<x-messages />

<header class="max-w-lg mx-auto mt-5">
  <a href="">
      <h1 class="text-4xl font-bold text-white text-center">Document List</h1>
  </a>
</header>

  <section>
    <div class="overflow-x-auto relative">
      <table class="w-96 mx-auto w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
          <tr>
            <th scope="col" class="py-3 px-6">
                Control No
            </th>
            <th scope="col" class="py-3 px-6">
                Subject
            </th>
            <th scope="col" class="py-3 px-6">
                Type
            </th>
            <th scope="col" class="py-3 px-6">
                Remarks
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($documents as $document)  
          <tr class="bg-gray-800 border-b text-white">        
            <td class="py-4 px-6">
              {{$document -> tracking_no}}
            </td>
            <td class="py-4 px-6">
              {{$document -> subject}}
            </td>
            <td class="py-4 px-6">
              {{$document -> type}}
            </td>
            <td class="py-4 px-6">
              {{$document -> remarks}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </section>


@include('../partials/footer')
    
