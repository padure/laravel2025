<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-md text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                @if (session('success'))
                    <div class="bg-green-700 text-white p-3 font-bold rounded-sm text-xs">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="flex justify-end">
                    <a href="{{ route("admin.students.create") }}"
                        class="underline underline-offset-4 py-2 px-3 text-xs font-bold hover:text-slate-600">Adauga un student</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
                        <thead>
                            <tr>
                                <th class="py-3 px-4 text-left text-xs">#</th>
                                <th class="py-3 px-4 text-left text-xs">Nume</th>
                                <th class="py-3 px-4 text-left text-xs">Email</th>
                                <th class="py-3 px-4 text-left text-xs">Telefon</th>
                                <th class="py-3 px-4 text-left text-xs">Adresă</th>
                                <th class="py-3 px-4 text-left text-xs">Gen</th>
                                <th class="py-3 px-4 text-left text-xs">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                            <tr class="border-b border-slate-200">
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $loop->iteration }}</td>
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->getFullName() }}</td>
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->email }}</td>
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->phone_number }}</td>
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->address }}</td>
                                <td class="py-1 px-4 text-xs text-slate-700 hover:bg-slate-100 cursor-pointer">{{ ucfirst($student->gender) }}</td>
                                <td class="py-1 px-4 text-xs hover:bg-slate-100 cursor-pointer">
                                    <a href="{{ route('admin.students.edit', ['student'=>$student->id]) }}" class="text-orange-500">Edit</a>
                                    <a href="{{ route('admin.students.destroy', ['student' => $student->id]) }}"
                                        class="text-red-700">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">No student in databse</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>