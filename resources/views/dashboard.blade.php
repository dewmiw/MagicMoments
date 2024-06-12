<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-blue-200 text-blue-900 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Total Users</h3>
                        <p class="text-2xl">1,234</p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-green-200 text-green-900 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">New Orders</h3>
                        <p class="text-2xl">567</p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-red-200 text-red-900 p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">Pending Reviews</h3>
                        <p class="text-2xl">89</p>
                    </div>
                </div>

                <!-- Table -->
                <div class="mt-8 overflow-x-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                        <tr>
                            <th class="px-4 py-2">Order ID</th>
                            <th class="px-4 py-2">Customer</th>
                            <th class="px-4 py-2">Amount</th>
                            <th class="px-4 py-2">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="border px-4 py-2">12345</td>
                            <td class="border px-4 py-2">John Doe</td>
                            <td class="border px-4 py-2">$99.99</td>
                            <td class="border px-4 py-2">Shipped</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">12346</td>
                            <td class="border px-4 py-2">Jane Smith</td>
                            <td class="border px-4 py-2">$149.99</td>
                            <td class="border px-4 py-2">Processing</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">12347</td>
                            <td class="border px-4 py-2">Sam Wilson</td>
                            <td class="border px-4 py-2">$89.99</td>
                            <td class="border px-4 py-2">Pending</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Charts -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
                    <!-- Bar Chart -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-4">Monthly Sales</h3>
                        <div class="flex items-end h-64 space-x-2">
                            <div class="bg-blue-200 w-1/6" style="height: 75%;"></div>
                            <div class="bg-blue-200 w-1/6" style="height: 50%;"></div>
                            <div class="bg-blue-200 w-1/6" style="height: 25%;"></div>
                            <div class="bg-blue-200 w-1/6" style="height: 100%;"></div>
                            <div class="bg-blue-200 w-1/6" style="height: 60%;"></div>
                            <div class="bg-blue-200 w-1/6" style="height: 80%;"></div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-4">Sales Distribution</h3>
                        <div class="relative w-64 h-64 mx-auto">
                            <div class="absolute w-full h-full rounded-full" style="clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%); background-color: #A5D6A7;"></div>
                            <div class="absolute w-full h-full rounded-full" style="clip-path: polygon(50% 0%, 75% 25%, 50% 50%, 0% 50%); background-color: #90CAF9;"></div>
                            <div class="absolute w-full h-full rounded-full" style="clip-path: polygon(50% 50%, 75% 75%, 50% 100%, 25% 75%); background-color: #FFCC80;"></div>
                            <div class="absolute w-full h-full rounded-full" style="clip-path: polygon(50% 50%, 100% 50%, 50% 0%, 0% 0%); background-color: #EF9A9A;"></div>
                        </div>
                    </div>
                </div>

                <!-- Additional Charts -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-8">
                    <!-- Horizontal Bar Chart -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-4">Product Sales</h3>
                        <div class="flex flex-col space-y-2">
                            <div class="flex items-center">
                                <div class="bg-green-200 h-8" style="width: 70%;"></div>
                                <div class="ml-2">Product A</div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-green-200 h-8" style="width: 50%;"></div>
                                <div class="ml-2">Product B</div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-green-200 h-8" style="width: 90%;"></div>
                                <div class="ml-2">Product C</div>
                            </div>
                            <div class="flex items-center">
                                <div class="bg-green-200 h-8" style="width: 30%;"></div>
                                <div class="ml-2">Product D</div>
                            </div>
                        </div>
                    </div>

                    <!-- Stacked Bar Chart -->
                    <div class="bg-white p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold mb-4">Quarterly Sales</h3>
                        <div class="flex items-end h-64 space-x-2">
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 40%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 60%;"></div>
                            </div>
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 30%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 70%;"></div>
                            </div>
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 50%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 50%;"></div>
                            </div>
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 20%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 80%;"></div>
                            </div>
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 60%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 40%;"></div>
                            </div>
                            <div class="relative w-1/6">
                                <div class="bg-purple-200 w-full absolute bottom-0" style="height: 70%;"></div>
                                <div class="bg-yellow-200 w-full absolute bottom-0" style="height: 30%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
