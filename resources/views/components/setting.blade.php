@props(['heading'])

<section class="py-8 max-w-10xl mx-auto">
    <h1 class="text-lg font-bold mb-8 pb-2 border-b">
        {{ $heading }}
    </h1>

<div class="max-w-6xl mx-auto bg-gray-100 p-12 rounded-lg">
<aside class="flex-shrink-0 bg-white drop-shadow-lg	 border border-black border-opacity-0 hover:border-opacity-5 rounded-lg">
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

        <main class="flex-1 ">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
</div>
</section>
