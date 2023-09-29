<x-layout>
    <x-setting :heading="'Edit User: ' . $user->name">
        <form method="POST" action="/admin/users/{{ $user->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

                    <x-form.input name="username" :value="old('username', $user->username)"  required />
                    <x-form.input name="name" :value="old('name', $user->name)"  required />
                    <x-form.input name="phone" :value="old('phone', $user->phone)"  required />
                    <x-form.input name="nid" :value="old('nid', $user->nid)"  placeholder="Optional" nullable />
                    <x-form.input name="mbps" :value="old('mbps', $user->mbps)"  required />
                    <x-form.input name="bill" :value="old('bill', $user->bill)"  required />
                    <x-form.input name="email" type="email" :value="old('email', $user->email)"  required />
                    <x-form.input name="location" :value="old('location', $user->location)"  required />
                    <!-- <x-form.input name="password" type="password" autocomplete="new-password"  required /> -->
                    <x-form.button>Update</x-form.button>

        </form>
    </x-setting>
</x-layout>
