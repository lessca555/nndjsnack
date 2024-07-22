<x-app-layout>
    @role('Admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4 text-black">
                <div class="flex gap-4">
                    <a href="#">
                        <div class="w-[150px] font-bold bg-blue-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>Item</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="w-[150px] font-bold bg-red-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>Sales</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="w-[150px] font-bold bg-green-700 flex justify-center items-center flex-col text-white rounded-lg p-5">
                            <p>etc</p>
                            <div>
                                <h1>0</h1>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @elserole('User')
    <h1>User</h1>
    @elserole('Sales')
    <h1>Sales</h1>
    @endrole
</x-app-layout>
