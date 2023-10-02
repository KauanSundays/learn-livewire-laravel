<div>
    <form wire:submit="createNewUser" action=>
        <input wire:model="name" type="text" placeholder="Name">
        <input wire:model="email" type="email" placeholder="Email">
        <input wire:model="password" type="password" placeholder="Your Password">

        <button>Create</button>
    </form>

    <hr>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>
