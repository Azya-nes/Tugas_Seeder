<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">
    <div class="mx-auto max-w-7xl px-4 py-10 sm:px-6 lg:px-8">
        <div class="rounded-3xl border border-slate-200 bg-white/90 p-8 shadow-xl shadow-slate-200/60 backdrop-blur-xl">
            <div class="mb-8 flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-cyan-600">Mahasiswa</p>
                    <h1 class="mt-3 text-3xl font-semibold tracking-tight text-slate-900">Data Mahasiswa</h1>
                </div>
            </div>

            <div class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-sm shadow-slate-200">
                <table class="min-w-full divide-y divide-slate-200 text-sm">
                    <thead class="bg-slate-900 text-slate-100">
                        <tr>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-[0.16em]">Nama</th>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-[0.16em]">NIM</th>
                            <th scope="col" class="px-6 py-4 text-left text-sm font-semibold uppercase tracking-[0.16em]">Jurusan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-slate-50">
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr class="border-b border-slate-200 bg-white hover:bg-slate-50">
                                <td class="px-6 py-4 whitespace-nowrap text-slate-900">{{ $mahasiswa->nama }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-slate-700">{{ $mahasiswa->npm }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-slate-700">{{ $mahasiswa->jurusan }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="px-6 py-8 text-center text-sm text-slate-500">Tidak ada data mahasiswa untuk ditampilkan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
