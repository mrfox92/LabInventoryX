<div>
    <x-jet-form-section submit="save">

        <x-slot name="title">
            Crear Nueva Categoría
        </x-slot>

        <x-slot name="description">
            Complete la información necesaria para crear una nueva categoría
        </x-slot>

        <x-slot name="form">

            <x-jet-action-message on="saved">
                Categoria creada con éxito
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
                Icono
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.icon" type="text" class="{{ $errors->has('createForm.icon') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.icon" />

            <x-jet-label class="mt-1">
                Imagen
            </x-jet-label>
            <x-jet-input wire:model="createForm.image" accept="image/*" type="file" class="{{ $errors->has('createForm.image') ? ' is-invalid' : '' }} mt-1 mb-4" id="{{ $rand }}" />

            <x-jet-input-error for="createForm.image" />
        </x-slot>

        <x-slot name="actions">
            <x-jet-button wire:target="save">
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    {{-- modal --}}
    <x-jet-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <x-jet-label class="mt-1">
                Imagen
            </x-jet-label>

            <div class="text-center my-2">
                @if ($editImage)
                    {{-- Se sube a carpeta de archivos temporales --}}
                    <img src="{{ $editImage->temporaryUrl() }}" class="img-fluid rounded" alt="">
                @else
                    {{-- imagen subida para la categoria --}}
                    <img src="{{ Storage::url($editForm['image']) }}" class="img-fluid rounded" alt="">
                @endif
            </div>

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

            <x-jet-label class="mt-1">
                Icono
            </x-jet-label>
            <x-jet-input wire:model.defer="editForm.icon" type="text" class="{{ $errors->has('editForm.icon') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.icon" />

            <x-jet-label class="mt-1">
                Imagen
            </x-jet-label>
            <x-jet-input wire:model="editImage" accept="image/*" type="file" class="{{ $errors->has('editImage') ? ' is-invalid' : '' }} mt-1 mb-4" id="{{ $rand }}" />

            <x-jet-input-error for="editImage" />

        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
