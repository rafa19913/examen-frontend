
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order {{ $data['order']['number'] }}</title>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        
     <link href="{{ asset('css/iziToast.min.css') }}" rel="stylesheet">
    
    
    
</head>
<body>
    
    
    <div class="container">
        
        
        <div class="title" style="text-align: center">
            <h2> Order {{ $data['order']['number'] }} </h2>
        </div>
        
        <br>
        
       <div class="title" style="text-align: center">
            <h3>Items </h2>
        </div>
        
        
        
        <table class="table" id="myTable">
            
            <thead class="thead-dark">
              <tr>
                <th scope="col">SKU</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            
            <tbody>
                
                @forelse($data['order']['items'] as $order)
                    <tr>
                        <th scope="col">{{ $order['sku'] }}</th>
                        <th scope="col">{{ $order['name'] }}</th>
                        <th scope="col">{{ $order['quantity'] }}</th>
                        <th scope="col">${{ $order['price'] }}</th>
                    </tr>
                @empty
                    <h1> It doesn't have any order yet.</h1> 
                @endforelse
                
         
            </tbody>
            
        </table>
        

        
        
        
        <form class="needs-validation" novalidate style="margin-top:100px" action="#">
            
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationCustom01">SKU</label>
                <input type="text" class="form-control" id="sku" placeholder="SKU" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              
              <div class="col-md-4 mb-3">
                <label for="validationCustom02">Quantity</label>
                <input type="number" class="form-control" id="quantity" placeholder="Quantity" value="" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
       
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom03">Price</label>
                <input type="number" class="form-control" id="price" placeholder="Price" required>
               
              </div>
            </div>
          
            <button class="btn btn-primary" type="submit" onclick="addNewRow();">Submit form</button>
            
          </form>
          
          <script>
              
              
              
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          </script>
    
    

    
<script src="{{ asset('js/main.js') }}" > </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="{{ asset('js/iziToast.min.js') }}" type="text/javascript"></script>


</body>
</html>