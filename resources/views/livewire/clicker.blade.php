<div>
    <h1> {{$title}}</h1>

    {{count($users)}}
    
    <button wire:click="handleClick">
        Create new user
    </button>
</div>
