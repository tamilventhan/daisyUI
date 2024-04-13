<div class="pb-4">
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex items-center justify-between pr-3">
                    <div class="flex-initial w-30">
                        <div
                            class="basis-1/4 p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                            Vendors
                        </div>
                    </div>
                    <div class="flex-initial w-40">
                        <div class="join">
                            <select class="select select-bordered join-item">
                                <option disabled selected>Filter</option>
                                <option>Company</option>
                                <option>Email</option>
                                <option>City</option>
                            </select>
                            <div>
                                <div>
                                    <input class="input input-bordered join-item" placeholder="Search" />
                                </div>
                            </div>
                            <div class="indicator">
                                <button class="btn join-item">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="flex-initial w-30">
                        <a href="{{ route('manage-vendors') }}" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2" />
                            </svg>
                            Add vendor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-0">
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
                        @include('pagination', ['paginationLinks' => $vendors->links()->elements, 'page' =>
                        $vendors->currentPage(), 'lastPage' => $vendors->lastPage()])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>