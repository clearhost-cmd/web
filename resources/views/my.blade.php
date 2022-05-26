<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Auctions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-left" style="text-align: left;">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Winning Bid</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (Auth::user()->auctions as $auction)
                                <tr>
                                    <td><a href="auctions/{{ $auction->id }}"> {{ $auction->title }}</a></td>
                                    <td>{{ $auction->description }}</td>
                                    <td><img src="{{ $auction->image }}" style="width:50px;height:50px;"></td>                                    
                                    <td>£{{ $auction->bid }}</td>                                    
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>                                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
