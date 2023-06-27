<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lead Form</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
		<link href="/css/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />


    <style>
        .form-container {
  display: flex;
  flex-direction: column;
  max-width: 900px;
  margin: 0 auto;
  padding: 20px;
}

.form-row {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

.form-column {
    flex: 1;
  margin-right: 10px;
  margin-bottom: 10px;
  margin-left: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input {
  width: 100%;
  padding: 12px;
  border: 1px solid black;
  border-radius: 4px;
}

button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width:100px;
  margin-top:10px;
}

@media (max-width: 768px) {
  .form-row {
    flex-direction: column;
  }

  .form-column {
    margin-right: 0;
  }
  
}
    </style>
</head>
<body>
  
@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

@if (session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif


<div style="height:120px;" >

</div>


    <form class="form-container" action="{{ route('savelead') }}" method="Post">
        @csrf
  <div class="form-row">
    <div class="form-column">
     
      <input type="text" id="firstname" name="firstname" placeholder="Name *" required>
    </div>
    <div class="form-column">
   
      <input type="text" id="lastname" name="lastname" placeholder="Last Name *" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-column">
     
      <input type="email" id="email" name="email"  placeholder="Email *" required>
    </div>
    <div class="form-column">
     
      <input type="number" id="phone" name="phone"  placeholder="Phone *" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-column">
      
      <input type="text" id="company" name="company" placeholder="Compnay/Organization ">
    </div>
    <div class="form-column">
      
      <input type="text" id="title" name="title" placeholder="Title">
    </div>
    
  </div>
  <label for="consulting">Consulting</label>
  <div class="form-column">
      
      <input type="text" id="consulting" name="consulting" placeholder="Consulting Services">
    </div>
    <label for="message">Message</label>
  <div class="form-column">
      
      <input type="text" class="textarea-wrapper" id="message" name="message"   style="height:80px;">
    </div>
  
  <button type="submit">Submit</button>
</form>


</body>
</html>