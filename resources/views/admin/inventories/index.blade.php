<x-app-layout>

    @livewire('partials.breadcrumbs', ['breadcrumbs' => $breadcrumbs ?? [], 'title' => $breadcrumbs[0]['title'] ?? 'Home' ])

    <div class="my-4">
      @livewire('admin.create-inventory')
    </div>

    <div class="mt-2 mb-5">

        <livewire:inventory-table/>
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

</x-app-layout>