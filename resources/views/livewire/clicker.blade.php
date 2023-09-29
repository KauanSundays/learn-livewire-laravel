<div>
    <h1> {{$title}}</h1>

    @if ($username)    {{-- Caso username for diferente de null, apareça --}}
        {{$username}}
    @endif

    {{count($users)}}
    
    <button wire:click="createNewUser">
        Create new user
    </button>
</div>
