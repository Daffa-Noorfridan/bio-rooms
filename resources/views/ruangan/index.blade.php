<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio Room | Ruangan</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">  
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
   .text-h2{
    color: #4D919C;
    font-family: Roboto;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    left:3%;
    top:3%;
    position:absolute;
  }
  .container {
    display:flex;
    position: relative;
    gap: 20px;
    top:15%;
    left:15%;
    align-items: center;
    align-content: center;
  }
  .card {
    height:320px;
    max-height: 320px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    box-sizing: border-box;
    border-radius: 8px;
    border: 1px solid #9BB4C5;
    background: #FFF;
    align-items: center;
    position: relative;
  }
  .card h3 {
    margin: 0 0 10px;
    color: #4D919C;
    font-family: Roboto;
    font-size: 22px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }
  .card p {
    margin: 5px 0;;
    color: #7B9AAF;
    font-family: Roboto;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    display:flex;
    position: relative;
  }
  .box-img{
    border-radius: 8px 8px 0px 0px;
    border: 1px solid #9BB4C5;
    background: url('./img-1.png') 0px / 100%  no-repeat;
    width:260px;
    height:160px;
    max-height: 60%;
  }

  select:hover {
    border-color: #357ABD;
  }

  select:focus {
    box-shadow: 0 0 8px rgba(74, 144, 226, 0.5);
  }
  .rectangle-1 {
    background: #ffffff;
    border-radius: 15px;
    width: 100%;
    height: 100%;
    max-width: 97%;
    max-height: 85%;
    position: absolute;
    left: 20px;
    top: 90px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.25);
  }
   </style>
</head>
<body>
  <div class="rectangle-1">
    <div class="text-h2">Ruangan</div>
    <div class="container">
        @foreach($ruangan as $rgn)
          <div class="card">
              <div class="box-img"></div><br>
              <h3>{{$rgn->nama_ruangan}}</h3><br>
             <a href="/ruangan/detail/{{$rgn->id}}" class="btn-dtl">Detail Ruangan</a>
               <!--<a href="{{ route('detail', $rgn->id) }}" class="btn-dtl">Detail Ruangan</a>-->
            </div>
        @endforeach
    </div>
  </div>
</body>
</html>
</x-app-layout>