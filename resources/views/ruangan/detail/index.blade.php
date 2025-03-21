<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio Room | Ruangan | Detail</title>
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
  <div class="rectangle-1">
    <div class="text-h2">Ruangan</div>
        <div class="container">
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-1 border p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Detail Ruangan</h3>
                <h2 class="text-2xl font-bold mb-4">{{ $room->first()->nama_ruangan }}</h2>
                <p><strong>Lantai:</strong> {{ $room->first()->lokasi }}</p>
                <p><strong>Kapasitas:</strong> {{ $room->first()->kapasitas }} Orang</p>
                <p><strong>Jam Operasional:</strong> 08:00 - 17:00</p>
                <h4 class="font-semibold mt-2">Fasilitas:</h4>
                <ul>
                    @foreach($room->first()->fasilitas ?? [] as $facility)
                    <li class="bg-gray-200 p-1 rounded">{{ $facility }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="col-span-2 border p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">Jadwal Rapat</h3>
                <div id="calendar"></div>
            </div>
          </div>
        </div>
  </div>
  <script>
      document.addEventListener('DOMContentLoaded', function () {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
              initialView: 'dayGridMonth',
              events: @json($room->first()->acara)
          });
          calendar.render();
      });
  </script>
</body>
</html>
</x-app-layout>