{{-- <x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
        <!-- Interact with the `state` property in Alpine.js -->
    </div>
</x-dynamic-component> --}}
<div>

    <h2>Perfil do Usuário {{ $getLabel()}}</h2>

    <p class="mt-1 text-sm leading-6 text-gray-600">{{ $getContent()}}</p>
    
</div>
