<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table-auto w-full text-left" style="text-align: left;">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>£ Bid</th>
                                <th>Date Bidded</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($auctions as $auction)
                                <tr>
                                    <td>{{ $auction->item }}</td>
                                    <td>£ {{ $auction->bid }}</td>
                                    <td>{{ $auction->created_at }}</td>                                    
                                </tr>
                            @endforeach                            
                        </tbody>
                    </table>                                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
