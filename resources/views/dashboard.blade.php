<x-app-layout>
<?php
  include 'db.php';
  $sql="SELECT * FROM users";
  $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vars.css">
  <link rel="stylesheet" href="./style.css">
  <script src="/bio-room/jquery-3.6.0.min.js"></script>
  
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
   body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            justify-content: center; 
            align-items: center; 
        }
    .text-h2{
        color: #4D919C;
        font-family: Roboto;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .cotainer-h2{
        position: absolute;
        top:15%;
        left:10%;
        
    }
   </style>
  <title>Bio Room | Dashboard</title>
</head>
<body>
  <div class="beranda">
    <div class="rectangle-2866"></div>
    <button class="btn-add" type="submit"><font class="jadwalkan-rapat">Jadwalkan Rapat</font></button>
    <div class="container-h2"><font class="text-h2">Beranda</font></div>
</div>
  <script>
        function searchFunction() {
            let query = document.getElementById("search-input").value;
            let content = document.getElementById("beranda");
            let paragraphs = content.getElementsByTagName("div");
            
            for (let p of paragraphs) {
                p.innerHTML = p.innerHTML.replace(/<span class="highlight">(.*?)<\/span>/g, "$1");
            }
            
            if (query) {
                let found = false;
                for (let p of paragraphs) {
                    if (p.innerHTML.includes(query)) {
                        p.innerHTML = p.innerHTML.replace(new RegExp(query, "gi"), match => `<span class="highlight">${match}</span>`);
                        p.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        found = true;
                        break;
                    }
                }
                if (!found) {
                    alert("Teks tidak ditemukan");
                }
            } else {
                alert("Masukkan kata kunci pencarian!");
            }
        }
    </script>
</body>
</html>
</x-app-layout>
