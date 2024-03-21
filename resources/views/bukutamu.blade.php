@extends('layout.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buku Tamu - Toko</title>
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
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    font-weight: bold;
  }
  
  .form-group input[type="text"], 
  .form-group input[type="email"], 
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    margin-top: 5px;
  }
  
  .form-group textarea {
    height: 100px;
  }
  
  .form-group button {
    padding: 10px 20px;
    background-color: #ff66b2; 
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
  }
  
  .form-group button:hover {
    background-color: #ff4da6; 
  }
</style>
</head>
<body>

<div class="container">
  <h1>Buku Tamu</h1>
  <form>
    <div class="form-group">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" required></textarea>
    </div>
    <div class="form-group">
      <button type="submit">Kirim</button>
    </div>
  </form>
</div>

</body>
</html>

@endsection