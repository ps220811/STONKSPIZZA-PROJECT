@extends('layouts.app-layout')
@extends('layouts.nav')
@section('content')
          <main class="my-8">
            <div class="container px-6 mx-auto  pt-[70px]">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                      @if ($message = Session::get('success'))
                          <div class="p-4 mb-3 bg-green-400 rounded">
                              <p class="text-green-800">{{ $message }}</p>
                          </div>
                      @endif
                        <h3 class="text-3xl text-bold">Orders</h3>
                      <div class="flex-1">
                        @php
                            $totaal = 0;
                        @endphp
                        <table class="w-full text-sm lg:text-base" cellspacing="0">
                          <thead>
                            <tr class="h-12 uppercase">
                              <th class="text-left">Name</th>
                              <th class="hidden text-left md:table-cell"> Status </th>
                              <th class="hidden text-mid md:table-cell"> Prijs</th>
                              <th class="hidden text-right md:table-cell"> Verwijder </th>
                            </tr>
                          </thead>
                          <tbody>
                          <form method="POST">
                              @foreach ($orders as $item)
                              
                            <tr>
                                <td>
                                    <a href="#">
                                    <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                    <p class="mb-2 md:ml-4">{{ $item->status }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                    <p class="mb-4 :ml-1">    €{{ $item->totaalprijs }}</p>
                                    </a>
                                </td>
</form>
                              <td class="hidden text-right md:table-cell">
                                <form action="{{ route('order.destroy', [$item->id]) }}" method="POST">
                                  @method('delete')
                                    @csrf
                                  <button class="px-4 py-2 text-white bg-red-700">x</button>
                              </form>

                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
            </div>
        </main>
    @endsection