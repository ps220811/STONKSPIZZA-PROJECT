
<x-app-layout>
    <x-slot name="header">
    <ul>
    <li><a class="text-white" href="{{ url('/') }}">Home</a></li>
    <li><a class="text-white" href="{{ url('/Winkelmandje') }}">Winkelwagen</a></li>
    <li><a class="text-white" href="{{ url('/order') }}">Order</a></li>
   
</ul>
<br>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard - ') }}
            {{ __("You're logged in!") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">

                                <h2>Stonks Pizza Admin page</h2>
                            </div>

                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif

                    <table class="table table-bordered table">
                        <thead>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Totaalprijs</th>
                            <th>Status</th>
                        </thead>
                        <tbody>
                            @forelse ($orders as $item)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->status}}</td>
                            <td>{{$item->totaalprijs}}</td>
                           <td>
                            
                            <a href="{{route ('users.edit' , $item->id) }}" class="">Edit</a>
                            <form action="{{ ('order.destroy') }}" method="post"></form>

                            <button type="submit">delete</button>
                           </td>
                           @empty
                           <tr>
                            aahahaaiah
                           </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>