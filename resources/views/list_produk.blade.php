<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="container mx-auto px-4 py-8">
    <h1 class="text-2xl font-bold mb-6 text-center text-black-700">Daftar Produk</h1>

    <div class="overflow-x-auto">
        <table class="min-w-full border border-gray-300 text-sm">
            <thead class="bg-red-200 text-gray-700">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Nama Produk</th>
                    <th class="px-4 py-2 border">Deskripsi Produk</th>
                    <th class="px-4 py-2 border">Harga Produk</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($nama as $index => $item)
                    <tr class="hover:bg-blue-50">
                        <td class="border px-4 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $item }}</td>
                        <td class="border px-4 py-2">{{ $desc[$index] }}</td>
                        <td class="border px-4 py-2">Rp {{ number_format($harga[$index], 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="mt-10 mx-auto max-w-3xl text-center">
    <h1 class="text-2xl font-bold mb-6">Input Produk</h1>

    <form method="POST" action="{{ route('produk.simpan') }}">
        @csrf
        <table class=" w-full text-left border border-gray-300 bg-white shadow-md rounded-lg">
            <tr>
                <td class="p-2 font-medium">Nama:</td>
                <td colspan="3">
                    <input type="text" class="mt-5 w-full border p-2 rounded" id="nama" name="nama">
                </td>
            </tr>
            <tr>
                <td class="p-2 font-medium">Deskripsi:</td>
                <td colspan="3">
                    <textarea class="w-full border p-2 rounded" id="deskripsi" name="deskripsi"></textarea>
                </td>
            </tr>
            <tr>
                <td class="p-2 font-medium">Harga:</td>
                <td colspan="3">
                    <input type="number" class="w-full border p-2 rounded mb-5" id="harga" name="harga">
                </td>
            </tr>
        </table>

        <div class="mt-4 text-center">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold px-4 py-2 rounded">
                Simpan
            </button>
        </div>
    </form>
</div>
</div>
</body>
</html>