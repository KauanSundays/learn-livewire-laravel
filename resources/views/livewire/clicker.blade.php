<div>
    <form class="p-5" wire:submit="createNewUser" action=>
        <input wire:model="name" class="block rounded border border-gray-100" type="text" placeholder="name">
        @error('name')
            <span class="text-danger-500 text-xs">{{$message}}</span>
        @enderror

        <input wire:model="email" class="block rounded border border-gray-100" type="email" placeholder="Email">
        @error('email')
            <span class="text-danger-500 text-xs">{{$message}}</span>
        @enderror

        <input wire:model="password" class="block rounded border border-gray-100" type="password" placeholder="Your Password">
        @error('password')
            <span class="text-danger-500 text-xs">{{$message}}</span>
        @enderror

        <button class="block rounded px-3 py-1 bg-gray">Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
