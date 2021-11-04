
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of orders</title>
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        
     <link href="{{ asset('css/iziToast.min.css') }}" rel="stylesheet">
    
    
    
</head>
<body>
    
    
    <div class="container">
        
        
        <div class="title" style="text-align: center">
            <h2> All the orders </h2>
        </div>
        
        
        <table class="table">
            
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Number</th>
                <th scope="col">Currency</th>
                <th scope="col">See details</th>
              </tr>
            </thead>
            
            <tbody>
                
                @forelse($data['orders'] as $order)
                    <tr>
                        <th scope="col">{{$loop->index+1}}</th>
                        <th scope="col">{{ $order['number'] }}</th>
                        <th scope="col">{{ $order['currency'] }}</th>
                        <th scope="col"> <a href="{{ route('orden', $order['id']) }}"> See details </a></th>
                    </tr>
                @empty
                    <h1> It doesn't have any order yet.</h1> 
                @endforelse
                
         
            </tbody>
            
        </table>
      
        
        
        
        
        
    </div>


    
    
    
<script src="{{ asset('js/main.js') }}" > </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script src="{{ asset('js/iziToast.min.js') }}" type="text/javascript"></script>


</body>
</html>