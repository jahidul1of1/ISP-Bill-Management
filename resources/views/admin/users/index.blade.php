<x-layout>
    
    <main class="max-w-7xl mx-auto mt-6 lg:mt-20 space-y-6 bg-gray-100 p-12 rounded-lg">

    <!-- my custom setting start -->

    <aside class="flex-shrink-0 bg-white drop-shadow-lg	 border border-black border-opacity-0 hover:border-opacity-5 rounded-l rounded-lg">
        <h4 class="navsetting-hedding">
            <i class="fa fa-cog" aria-hidden="true"></i>
            Admin Control Panel
            <i class="fa fa-cog" aria-hidden="true"></i>
        </h4>
        
        <div class="setting-nav p-5">
            <ul>
                <li>
                    <a href="/admin/users" class="{{ request()->is('admin/users') ? 'text-blue-500' : '' }}">
                    <i class="fa fa-users" aria-hidden="true"></i> All Users
                    </a>
                </li>
                <li>
                    <a href="#" class="{{ request()->is('admin/payment') ? 'text-blue-500' : '' }}">
                    <i class="fa fa-money" aria-hidden="true"></i> All Payments
                    </a>
                </li>
                <li>
                    <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> All Posts
                    </a>
                </li>

                <li>
                    <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">
                    <i class="fa fa-picture-o" aria-hidden="true"></i> New Post</a>
                </li>
            </ul>

        </div>
    </aside>

    
<!-- my custom setting edn -->

    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4 text-center item-center">
        <h4 class="navsetting-hedding text-green-700">
            Jhalokathi cable network ALL USERS
        </h4>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-white rounded-xl px-3 py-3">
            <i class="fa fa-user" id="all_icon" aria-hidden="true"></i>
            <form method="GET" action="/admin/users">
                

                <input type="text"
                       name="search"
                       placeholder="Find Users"
                       class="bg-transparent placeholder-black font-semibold text-sm pr-9"
                       value="{{ request('search') }}"
                >
                <button class="pl-6 text-green-700 font-bold"><i class="fa fa-search" aria-hidden="true "></i> Search</button>
            </form>
        </div>
    </div>

        @foreach ($users as $user)
        <div class="bg-white drop-shadow-sm flex items-center justify-between rounded-lg drop-shadow-lg ">
            <div class="name-phone p-3">
                    <div class="text-x font-bold text-gray-900 mb-4">
                        <i class="fa fa-user" id="all_icon" aria-hidden="true"></i>
                        <a href="/admin/users/{{ $user->id}}">{{ $user->name }}</a> 
                    </div>
                    <div class="text-x font-bold text-gray-900">
                        <i class="fa fa-map-marker" id="location-icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->location }}</a> 
                    </div>
            </div>
            

            <div class="mbps-bill p-3">
                    <div class="text-x font-bold text-gray-900 mb-4">
                        <i class="fa fa-wifi" id="all_icon" aria-hidden="true"></i>
                        <a href="#" id="uname">{{ $user->mbps }}</a> 
                    </div>
                    <div class="text-x font-bold text-gray-900">
                        <i class="fa fa-money" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->bill }}</a> 
                    </div>
            </div>
            

            <div class="email-loc p-3">
                    <div class="text-x font-bold text-gray-900 mb-4">
                        <i class="fa fa-envelope" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->email }}</a> 
                    </div>
                    <div class="text-x font-bold text-gray-900">
                        <i class="fa fa-phone" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->phone }}</a> 
                    </div>
            </div>


            <div class="edit-delet flex">
                    <a href="/admin/users/{{ $user->id }}/edit" class="bg-green-900 rounded-full text-white py-3 px-5 ml-6 text-xs font-bold">
                        <i class="fa fa-pencil" aria-hidden="true"></i> Edit
                    </a> 
                    
                    <form method="POST" action="/admin/users/{{ $user->id }}">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Are you sure you want to delete this USER?')" id="trash-btn" class="bg-red-500 rounded-full text-white py-3 px-5 ml-6 text-xs font-bold">
                            <i class="fa fa-trash" aria-hidden="true"></i> Delet
                        </button>
                    </form>
            </div>


        </div>
        @endforeach
    </main>

</x-layout>