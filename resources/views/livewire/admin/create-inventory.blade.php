<div>
    <x-jet-form-section submit="save">

        <x-slot name="title">
            Registrar nuevo artículo inventario
        </x-slot>

        <x-slot name="description">
            Complete la información necesaria para agregar un nuevo artículo al inventario
        </x-slot>

        <x-slot name="form">

            <x-jet-action-message on="saved">
                artículo inventario agregado con éxito
            </x-jet-action-message>

            <x-jet-label class="mt-1">
                Nombre
            </x-jet-label>
            <x-jet-input wire:model="createForm.name" type="text" class="{{ $errors->has('createForm.name') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.name" />
            
            <x-jet-label class="mt-1">
                Slug
            </x-jet-label>
            <x-jet-input disabled wire:model="createForm.slug" type="text" class="{{ $errors->has('createForm.slug') ? ' is-invalid' : '' }} text-muted mt-1"/>

            <x-jet-input-error for="createForm.slug" />

            <x-jet-label class="mt-1">
                Descripción
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.description" type="text" class=" {{ $errors->has('createForm.description') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.description" />

            <x-jet-label class="mt-1">
                Cantidad(stock)
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.quantity" type="text" class=" {{ $errors->has('createForm.quantity') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.quantity" />

            <x-jet-label class="mt-1">
                Estado
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.status" type="text" class=" {{ $errors->has('createForm.status') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.status" />

        </x-slot>

        <x-slot name="actions">
            <x-jet-button wire:target="save">
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    {{-- modal --}}
    {{-- <x-jet-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <x-jet-action-message on="saved">
                Categoria creada con éxito
            </x-jet-action-message>

            <x-jet-label class="mt-1">
                Nombre
            </x-jet-label>
            <x-jet-input wire:model="editForm.name" type="text" class="{{ $errors->has('editForm.name') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.name" />
            
            <x-jet-label class="mt-1">
                Slug
            </x-jet-label>
            <x-jet-input disabled wire:model="editForm.slug" type="text" class="{{ $errors->has('editForm.slug') ? ' is-invalid' : '' }} text-muted mt-1"/>

            <x-jet-input-error for="editForm.slug" />

            <x-jet-label class="mt-1">
                Descripción
            </x-jet-label>
            <x-jet-input wire:model.defer="editForm.description" type="text" class=" {{ $errors->has('editForm.description') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.description" />

        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal> --}}

</div>
