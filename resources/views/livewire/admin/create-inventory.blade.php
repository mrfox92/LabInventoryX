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
                Artículo inventario agregado con éxito
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
                Cantidad (stock)
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.quantity" type="text" class=" {{ $errors->has('createForm.quantity') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.quantity" />

            <x-jet-label for="options" class="mt-1">
                Estado
            </x-jet-label>

            <select id="statusOptions" wire:model.defer="createForm.status" class="form-control {{ $errors->has('createForm.status') ? ' is-invalid' : '' }} my-1">
                <option value="">Seleccione una opción...</option>
                @foreach($statusOptions as $i => $value)
                    <option value="{{ $i }}">{{ $value }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="createForm.status" />

            <x-jet-label class="mt-1">
                Fecha ingreso (opcional)
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.add_date" type="date" class=" {{ $errors->has('createForm.add_date') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.add_date" />

            <x-jet-label class="mt-1">
                Fecha vencimiento (opcional)
            </x-jet-label>
            <x-jet-input wire:model.defer="createForm.exp_date" type="date" class=" {{ $errors->has('createForm.exp_date') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.exp_date" />

            <x-jet-label for="category_id" class="mt-1">
                Categoria
            </x-jet-label>

            <select id="category_id" wire:model.defer="createForm.category_id" class="form-control {{ $errors->has('createForm.category_id') ? ' is-invalid' : '' }} mt-1 mb-3">
                <option value="">Seleccione una categoria...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="createForm.category_id" />

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
            Editar artículo inventario
        </x-slot>

        <x-slot name="content">

            <x-jet-action-message on="saved">
                artículo inventario actualizado con éxito
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
                Cantidad (stock)
            </x-jet-label>
            <x-jet-input wire:model.defer="editForm.quantity" type="text" class=" {{ $errors->has('editForm.quantity') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.quantity" />

            <x-jet-label for="options" class="mt-1">
                Estado
            </x-jet-label>

            <select id="statusOptions" wire:model.defer="editForm.status" class="form-control {{ $errors->has('editForm.status') ? ' is-invalid' : '' }} my-1">
                <option value="">Seleccione una opción...</option>
                @foreach($statusOptions as $i => $value)
                    <option value="{{ $i }}">{{ $value }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="editForm.status" />

            <x-jet-label class="mt-1">
                Fecha ingreso (opcional)
            </x-jet-label>
            <x-jet-input wire:model.defer="editForm.add_date" type="date" class=" {{ $errors->has('editForm.add_date') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.add_date" />

            <x-jet-label class="mt-1">
                Fecha vencimiento (opcional)
            </x-jet-label>
            <x-jet-input wire:model.defer="editForm.exp_date" type="date" class=" {{ $errors->has('editForm.exp_date') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="editForm.exp_date" />

            <x-jet-label for="category_id" class="mt-1">
                Categoria
            </x-jet-label>

            <select id="category_id" wire:model.defer="editForm.category_id" class="form-control {{ $errors->has('editForm.category_id') ? ' is-invalid' : '' }} mt-1 mb-3">
                <option value="">Seleccione una categoria...</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <x-jet-input-error for="editForm.category_id" />

        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

</div>
