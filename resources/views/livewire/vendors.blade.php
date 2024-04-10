<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Vendors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr class="bg-gray-200 py-4 text-black">
                                <th><input type="checkbox" class="checkbox checkbox-primary checkbox-sm" /></th>
                                <th>Company Name</th>
                                <th>Email</th>
                                <th>city</th>
                                <th>Contact person</th>
                                <th>Mobile number</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($vendors as $vendor)
                            <tr class="hover">
                                <td><input type="checkbox" class="checkbox checkbox-primary checkbox-sm" /></td>
                                <td>{{ $vendor->companyName }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>{{ $vendor->city }}</td>
                                <td>{{ $vendor->contactPerson }}</td>
                                <td>{{ $vendor->mobileNumber }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td>No vendors</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="border-t"></div>
                    <div class="flex m-5 justify-end">
                        @include('pagination', ['paginationLinks' => $vendors->links()->elements, 'page' => $vendors->currentPage(), 'lastPage' => $vendors->lastPage()])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>