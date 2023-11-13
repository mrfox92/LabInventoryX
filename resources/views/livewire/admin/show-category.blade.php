
<div class="my-3">
    @livewire('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs ?? [], 'title' => $breadcrumbs[0]['title'] ?? 'Home' ])

    {{-- Formulario crear subcategoria --}}
    <x-jet-form-section submit="save">

        <x-slot name="title">
            Crear Nueva SubCategoría
        </x-slot>

        <x-slot name="description">
            Complete la información necesaria para crear una nueva subcategoría
        </x-slot>

        <x-slot name="form">

            <x-jet-action-message on="saved">
                Subcategoria creada con éxito
            </x-jet-action-message>

            <x-jet-label class="mt-1">
                Nombre
            </x-jet-label>
            <x-jet-input wire:model="createForm.name" type="text" class="{{ $errors->has('createForm.name') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.name" />
            
            <x-jet-label class="mt-1">
                Slug
            </x-jet-label>
            <x-jet-input disabled wire:model="createForm.slug" type="text" class="{{ $errors->has('createForm.slug') ? ' is-invalid' : '' }} mt-1"/>

            <x-jet-input-error for="createForm.slug" />
        </x-slot>

        <x-slot name="actions">
            <x-jet-button wire:target="save">
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <br><br>

    {{-- Tabla de subcategorias --}}
    <x-jet-action-section class="my-5">

        <x-slot name="title">
            Listado de subcategorias
        </x-slot>

        <x-slot name="description">
            Aquí encontrarás las subcategorias asociadas
        </x-slot>

        <x-slot name="content">
            

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="table-responsive">
    
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Acciones</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($subcategories as $subcategory)
                                <tr>
                                  <th scope="row">{{ $subcategory->id }}</th>
                                  <td>{{ $subcategory->name }}</td>
                                  <td>{{ $subcategory->slug }}</td>
                                  <td colspan="2">
                                    <button class="btn btn-primary" wire:click="edit('{{ $subcategory->id }}')">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                    <button class="btn btn-danger" wire:click="$emit('deleteSubcategory', '{{ $subcategory->id }}')">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </button>
                                  </td>
                                </tr>
                                    
                                @empty
                                    <div>no hay data</div>
                                @endforelse
                            </tbody>
                        </table>
    
                    </div>
    
                    <div class="row">
                        <div class="col-md-12">
                            {{ $subcategories->links() }}
                        </div>
                    </div>
                </div>
            </div>

        </x-slot>
    </x-jet-action-section>

    {{-- Modal editar subcategoria --}}
    <x-jet-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Editar subcategoría
        </x-slot>

        <x-slot name="content">

            <x-jet-action-message on="saved">
                Subcategoria editada con éxito
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

        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>

    @push('scripts')
        <script>
          Livewire.on('deleteSubcategory', subcategoryId => {

            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {

                Livewire.emitTo('admin.show-category', 'delete', subcategoryId);

                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })
          });

          Livewire.on('edit', categoryId => {

            Livewire.emitTo('admin.create-category', 'edit', categoryId.category);
          });
        </script>
    @endpush

</div>