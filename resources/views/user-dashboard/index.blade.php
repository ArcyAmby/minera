@extends('layouts.user')

@section('content')
  
  <h1 class="title section2-header mt-4">HARDWARE PRODUCTS <span id="timer"><i class="fa fa-clock-o"></i></span></h1>
  <section class="section2">
    
    <div class="inventory-all">
        @foreach ($inventoryTypes as $types)
            @foreach ($types as $type)
                @foreach ($type->inventories as $inventory)
                    @foreach ($inventory->logistics as $logistic)
                    <div class="deal-card">
                        <img src="{{ asset('storage/' . $inventory->inv_image) }}" alt="{{ $inventory->inv_name }}">
                        <span class="title">{{ $inventory->inv_name }}</span>
                        <span class="sub-title">{{ $inventory->inv_brand }}</span>
                        <span class="price">PHP {{ $logistic->inv_price }}</span>
                        <span class="sub-title">{{ $inventory->inv_description }}</span>
                        <span class="sub-title">Quantity: {{ $logistic->inv_quantity }}</span>
                        <button class="add-to-cart text-amber-600 p-4 text-sm font-weight-bold rounded-full shadow-md" data-inventory-id="{{ $inventory->id }}">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                    @endforeach
                @endforeach
            @endforeach
        @endforeach
    </div>

  
  
  
  
  
  
  <!--ADDS-->
  <center>
  <div class="Advertisement">
    <img class="myAdds" src="https://i.ibb.co/r5f5GgH/1.png" style="width:100%">
    <img class="myAdds" src="https://i.ibb.co/bN4XFXp/2.png" style="width:100%">
    <img class="myAdds" src="https://i.ibb.co/nfpZj9p/3.png" style="width:100%">
  </div>
  </center>
  

@endsection