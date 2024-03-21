@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biodata Produk</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9e6e6; 
  }
  
  .container {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    box-sizing: border-box;
  }
  
  h1 {
    text-align: center;
  }
  
  .product-info {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .product-info img {
    max-width: 200px;
    margin-right: 20px;
  }
  
  .product-details {
    flex-grow: 1;
  }
  
  .product-details h2 {
    margin-top: 0;
  }
  
  .product-details p {
    margin: 5px 0;
  }
  
  .button-container {
    text-align: center;
  }
  
  .button {
    padding: 10px 20px;
    background-color: #ff66b2; 
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  
  .button:hover {
    background-color: #ff4da6; 
  }
</style>
</head>
<body>

<div class="container">
  <h1>Detail Produk</h1>
  
  <div class="product-info">
    <img src="https://via.placeholder.com/200" alt="Product Image">
    <div class="product-details">
      <h2>Nama Produk</h2>
      <p>Harga: Rp. 100.000</p>
      <p>Stok: 10</p>
      <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
  
  <div class="button-container">
    <button class="button">Beli Sekarang</button>
  </div>
</div>

</body>
</html>
@endsection