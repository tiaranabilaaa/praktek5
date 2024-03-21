@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Toko Online - Halaman Produk</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap">
<style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9e6e6; 
  }
  
  header {
    background-color: #ff66b2;
    color: #333;
    padding: 10px;
    text-align: center;
  }
  
  h1 {
    margin: 0;
  }
  
  .container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .product {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    overflow: hidden;
  }
  
  .product img {
    max-width: 100%;
    height: auto;
  }
  
  .product h2 {
    margin-top: 0;
  }
  
  .product p {
    margin-bottom: 0;
  }
</style>
</head>
<body>

<header>
  <h1>Toko Online - Halaman Produk</h1>
</header>

<div class="container">
  <div class="product">
    <img src="https://via.placeholder.com/150" alt="Product Image">
    <h2>Produk 1</h2>
    <p>Harga: Rp. 100.000</p>
    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <button>Beli Sekarang</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/150" alt="Product Image">
    <h2>Produk 2</h2>
    <p>Harga: Rp. 150.000</p>
    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <button>Beli Sekarang</button>
  </div>

  <div class="product">
    <img src="https://via.placeholder.com/150" alt="Product Image">
    <h2>Produk 3</h2>
    <p>Harga: Rp. 200.000</p>
    <p>Deskripsi: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <button>Beli Sekarang</button>
  </div>
</div>

</body>
</html>

@endsection