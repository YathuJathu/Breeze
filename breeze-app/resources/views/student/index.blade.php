<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <center>
            <x-success-status class="mb-4" :status="session('message')" />
            {{--  <x-validation-errors class="mb-4" :errors="$errors" />  --}}
        </center>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table border="2" class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Action</th>
                        </thead>
                        @forelse ($students as $data)
                            <tr>
                                <td>{{ $data->id }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td><a class="btn btn-success" href="{{ url('editstudent', $data) }}">update</a></td>
                                <td>
                                    <form action="{{ url('deletestudent/'.$data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button class="btn btn-danger">Delete</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="5" align="center">Nodata</td>
                        @endforelse


                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
