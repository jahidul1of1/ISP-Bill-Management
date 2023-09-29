

<x-layout>
    @include ('porfile._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
       
        <div class="bg-yellow-200 flex items-center justify-between">
            <div class="name-phone p-3">
                    <div class="text-sm font-bold text-gray-900 mb-4">
                        <i class="fa fa-user" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->name }}</a>
                    </div>
                    <div class="text-sm font-bold text-gray-900">
                        <i class="fa fa-phone" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->phone }}</a>
                    </div>
            </div>
            

            <div class="mbps-bill p-3">
                    <div class="text-sm font-bold text-gray-900 mb-4">
                        <i class="fa fa-wifi" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->mbps }}</a>
                    </div>
                    <div class="text-sm font-bold text-gray-900">
                        <i class="fa fa-money" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->bill }}</a> 
                    </div>
            </div>
            

            <div class="email-loc p-3">
                    <div class="text-sm font-bold text-gray-900 mb-4">
                        <i class="fa fa-envelope" id="all_icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->phone }}</a> 
                    </div>
                    <div class="text-sm font-bold text-gray-900">
                        <i class="fa fa-map-marker" id="location-icon" aria-hidden="true"></i>
                        <a href="#">{{ $user->location }}</a>
                    </div>
            </div>


            
        </div>
    </main>
</x-layout>
