<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio Room | Booking | Notulen</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style.css') }}">  
  <style>
   a,
   button,
   input,
   select,
   h1,
   h2,
   h3,
   h4,
   h5,
   * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
       border: none;
       text-decoration: none;
       background: none;
   
       -webkit-font-smoothing: antialiased;
   }
   
   menu, ol, ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
   }
   </style>
</head>
<body>
    <div classmx-auto p-6">
        <div class="grid grid-cols-1 gap-1">
            <!-- Section Info Ruangan -->
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold">Topik</h2>
                <p class="text-gray-700">Rapat Progress Bulanan</p>
                <p class="text-sm text-gray-500">(16 Peserta)</p>
                <hr class="my-2">
                <p class="text-gray-700"><strong>03-Feb-2025</strong></p>
                <p class="text-gray-500">10:00 - 10:30</p>
                <p class="mt-2 text-gray-700"><strong>The Sun</strong></p>
                <p class="text-gray-500">Lantai 5</p>
            </div>

            <!-- Section Notulen -->
            <div class="col-span-2 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-blue-600">Notulen Rapat</h2>

                <form action="{{ route('notulen') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-4">
                        <label class="block text-gray-700 font-medium">Notulis <span class="text-red-500">*</span></label>
                        <input type="text" name="notulis" class="w-full p-2 border rounded-lg" placeholder="Nama penulis notulen rapat" required>
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 font-medium">Catatan</label>
                        <textarea name="catatan" rows="6" class="w-full p-2 border rounded-lg" placeholder="Mulai Ketik..."></textarea>
                    </div>

                    <div class="mt-4 border-dashed border-2 p-6 text-center">
                        <p class="text-gray-500">Seret File atau Pilih File</p>
                        <input type="file" name="file" class="mt-2">
                        <p class="text-sm text-gray-400">Format: .pdf, .docx, .xlsx, .pptx</p>
                    </div>

                    <div class="mt-4 text-right">
                        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
</x-app-layout>