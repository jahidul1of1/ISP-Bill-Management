<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-3xl" >
        Jhalokathi Cable Network<span class="text-blue-500">User List</span> 
    </h1>

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
                <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
               

                <input type="text"
                       name="search"
                       placeholder="Find Users"
                       class="bg-transparent placeholder-black font-semibold text-sm"
                       value="{{ request('search') }}"
                >
            </form>
        </div>
    </div>
</header>
