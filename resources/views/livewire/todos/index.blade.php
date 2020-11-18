<div>
    <div class="">

      <div class="mb-2 p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        @if ($updateMode)
          @include('livewire.todos.edit')
        @else
          @include('livewire.todos.create')
        @endif
      </div>

      <div class="mb-2 p-5 bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <table class="table table-auto">
          <thead>
            <tr>
              <th class="px-4 py-2">ID</th>
              <th class="px-4 py-2">Title</th>
              <th class="px-4 py-2">Slug</th>
              <th class="px-4 py-2">Is Active</th>
              <th class="px-4 py-2">When</th>
              <th class="px-4 py-2">Order</th>
              <th class="px-4 py-2">Remarks</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($todos as $todo)
              <tr>
                <td class="border px-4 py-2">{{ $todo->id }}</td>
                <td class="border px-4 py-2">{{ $todo->title }}</td>
                <td class="border px-4 py-2">{{ $todo->slug }}</td>
                <td class="border px-4 py-2">{{ $todo->is_active }}</td>
                <td class="border px-4 py-2">{{ $todo->when }}</td>
                <td class="border px-4 py-2">{{ $todo->order }}</td>
                <td class="border px-4 py-2">{{ $todo->remarks }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
</div>
