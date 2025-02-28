<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <div class="row text center">
            <div class="col-sm-2">
                <a href="#" class="block text-center" >User</a>
            </div>
            <div class="col-sm-2">
                <a href="#" >Add item</a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="block text-center">Stock</a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="block text-center">Product</a>
            </div>
            <div class="col-sm-2">
                <a href="#" class="block text-center">Supplier</a>
            </div>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row text center">
                        <div class="col-sm-4">
                            <img src="{{asset('image/management.png')}}" height="100" width="100" class="mx-auto">
                            <a href="/Management" class="block text-center">Management</a>
                        </div>

                        <div class="col-sm-4">
                            <img src="{{asset('image/supply.png')}}" height="100" width="100" class="mx-auto">
                            <a href="/Cashier" class="block text-center">Cashier</a>
                        </div>

                        <div class="col-sm-4">
                            <img src="{{asset('image/sharing.png')}}" height="100" width="100" class="mx-auto">
                            <a href="/Report" class="block text-center">Report</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
