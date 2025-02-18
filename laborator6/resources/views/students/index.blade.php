<x-guest-layout>
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-semibold text-gray-800 mb-6">Lista Studenților</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full table-auto bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-slate-600 text-white">
                    <th class="py-3 px-4 text-left text-sm">#</th>
                    <th class="py-3 px-4 text-left text-sm">Nume</th>
                    <th class="py-3 px-4 text-left text-sm">Email</th>
                    <th class="py-3 px-4 text-left text-sm">Telefon</th>
                    <th class="py-3 px-4 text-left text-sm">Adresă</th>
                    <th class="py-3 px-4 text-left text-sm">Gen</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                    <tr class="border-b border-slate-200">
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $loop->iteration }}</td>
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->first_name }} {{ $student->last_name }}</td>
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->email }}</td>
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->phone_number }}</td>
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ $student->address }}</td>
                        <td class="py-1 px-4 text-sm text-slate-700 hover:bg-slate-100 cursor-pointer">{{ ucfirst($student->gender) }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5"></td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</x-guest-layout>