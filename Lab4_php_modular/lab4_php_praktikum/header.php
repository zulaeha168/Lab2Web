<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 4</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
 /* CSS */
 :root {
        --blue: rgb(81, 128, 181);
        --pink: #f8d6d9;
        --green: rgb(62, 107, 31);
        --magenta: #d47ab3;
        --orange: #f1a469;
        --white: #ffffff;
        --purple: #8258a2;
        --darkblue: #2a5b7f;
        --light-purple: #cdb0e1;
        --light-green: #c6eab7;
        --beige: #dfd3aa;
    }
    * {
        margin: 0;
        padding: 0;
    }
    
    html {
        scroll-behavior: smooth;
    }
    
    body {
        line-height: 1;
        font-size: 100%;
        font-family: 'Quicksand', sans-serif;
        background-color: var(--white);
        color: var(--darkblue);
        display: flex;
    }
    
    #container {
        width: 980px;
        margin: 0 auto;
        box-shadow: 0 0 1em #e1cece;
        background-color: var(--light-purple);
    }
     
    /* header */
    header {
        padding: 10px;
        background-color: var(--white);
    }
    
    header h1 {
        margin: 10px 10px;
        color: var(--purple);
    }
     
    /* navigasi */
    nav {
        display: block;
        background-color: var(--darkblue);
    }
    
    nav a {
        padding: 15px 30px;
        display: inline-block;
        color: var(--purple);
        font-size: 14px;
        text-decoration: none;
        font-weight: bold;
    }
    
    nav a.active,
    nav a:hover {
        background-color: var(--light-purple);
        color: var(--white);
    }
     
    /* Content Panel */
    .content {
        background-color: var(--light-purple);
        padding: 50px 30px;
        margin-bottom: 20px;
    }
    
    .content h1 {
        margin-bottom: 20px;
        font-size: 35px;
        font-style: italic;
        color: var(--darkblue);
    }
    
    .content p {
        margin-bottom: 20px;
        font-size: 18px;
        line-height: 25px;
    }
     
    /* tabel */
    body{
        font-family: sans-serif;
        align-items: center;
    }
    
    table{
        border-collapse: collapse;
        border-radius: 20%;
    }
    
    th, td{
        border: 1px solid var(--beige);
        font-size: 16px;
        padding: 15px 15px;
    }
    
    table th {
        background: var(--purple);
        color: var(--white);
        font-weight: 700;
        font-size: 14px;
    }
    
    table tr {
        background: var(--white);
        color: var(--purple);
        font-weight: 500;
    }
     
    /* Tambah Barang */
    .input{
        display: flex;
        align-items: center;
        margin-bottom: 5px;
    }
    .input label {
        display: inline-block;
        width: 120px;
        text-align: left;
        margin-right: 50px;
        font-weight: bold;
    }
    .input input[type="text"], form textarea {
        height: 12px;
        border: 1px solid (--magenta);
        padding: 10px;
    }
    .submit input{
        border: 1px solid var(--white);
        background-color: var(--light-green);
        color: var(--white);
        padding: 5px 15px;
        margin-top: 5px;
        margin-left: 170px;
        border-radius: 4px;
        cursor: pointer;
    }
    .submit input:hover {
        background-color: var(--light-purple);
        color: var(--magenta);
        font-weight: bold;
    }
    
    /* footer */
    footer {
        background-color: var(--darkblue);
        padding: 20px;
        color: var(--magenta);
        text-align: center;
    }
    
    footer p {
        color: var(--magenta);
        font-weight: 700;
    }
    
    footer a {
        color: var(--purple);
        font-weight: 700;
    }
</style>
</head>
<body>
    <div id="container">
        <header>
            <h1>Modularisasi</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="tambah.php">Tambah Barang</a>
            <a href="about.php">About</a>
        </nav>