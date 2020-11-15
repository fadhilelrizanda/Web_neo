<html>
<?php
// $angka1,$angka2 merupakan parameter
function nama()
{
    echo "Created  by Fadhil Elrizanda";
}
function text_generator()
{
    echo "Eiusmod reprehenderit sunt culpa magna ad qui proident ea sunt laborum sint. In amet non amet magna. Cillum non Lorem elit adipisicing velit nulla officia. Occaecat cillum cupidatat eiusmod do laboris qui ex Lorem excepteur consequat. Dolore excepteur voluptate magna fugiat elit esse quis cillum cillum labore laboris amet mollit. Deserunt nostrud officia elit velit elit mollit exercitation. Labore ea exercitation in sit sunt aliqua est ea aliqua.";
}

function judul()
{
    echo "Tugas 1 fungsi biasa";
}
?>

<head>
    <style>
        h1 {
            font-size: 40px;
            font-weight: 200px;
            text-align: center;
        }

        p {
            font-size: 20px;
            font-weight: 100px;
            text-align: center;
        }

        .container {
            border: 5px solid black;
        }
    </style>
</head>
<h1><?php judul() ?></h1>
<div class="container">
    <p><?php text_generator() ?></p>
</div>

<p><?php nama() ?></p>