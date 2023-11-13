<x-app-layout>

    @livewire('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs ?? [], 'title' => $breadcrumbs[0]['title'] ?? 'Home' ])


    <div class="my-4">
      @livewire('admin.create-category')
    </div>

    <div class="mt-2 mb-5">

        <livewire:category-table/>
    </div>

    <x-slot name="footer">
        
        <div class="row mt-2 mb-4">
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Title</h3>
                <p class="card-text">Text</p>
              </div>
            </div>
          </div>
        </div>
    </x-slot>

    @push('scripts')
        <script>
          Livewire.on('deleteCategory', categoryId => {

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

                Livewire.emitTo('admin.create-category', 'delete', categoryId.category);

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

</x-app-layout>