@foreach($inventoryTypes as $type)
    @foreach($type->inventories as $inventory)
        @foreach($inventory->logistics as $logistic)
                <div class="grow max-w-[20%] inline-flex px-2 pb-4 min-w-[20%]">
                    <a href="#" class="relative bg-white inline-flex items-stretch w-full h-full p-0 box-border shadow-lg rounded-lg overflow-hidden">
                        <!-- heart -->
                        <div class="absolute top-[4px] right-[4px] w-[28px] h-[28px] text-center z-10 rounded-full">
                            <div>
                                <span class="absolute top-[4px] right-[4px] w-[24px] h-[24px] text-center z-10 rounded-full bg-gray-200">
                                    <div class="absolute top-0 left-0 right-0 bottom-0 m-auto">
                                        <i class="fa-solid fa-heart" style="color: #949494;"></i>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <!-- end heart -->
                        <div class="relative shadow-md rounded-lg min-w-full flex flex-col">
                            <!-- img product -->
                            <div class="relative">
                                <div class="relative h-0 rounded-t-lg pb-[100%] w-full bg-white text-ellipsis overflow-hidden"> 
                                    <div class="bg-no-repeat bg-cover inline-block my-0 mx-auto text-center w-full h-full absolute">
                                        <img src="https://fakeimg.pl/400x400/a5edc0/616161?text=product" alt="" class="rounded-t-lg">
                                    </div>
                                </div>
                            </div>
                            <!-- end img product -->
                            <div class="relative p-4 box-border overflow-hidden grow">
                                <!-- product name -->
                                <span class="text-gray-800 max-h-[38px] text-sm font-semibold leading-5 overflow-hidden whitespace-normal break-words">
                                    {{ $inventory->inv_name }}
                                </span>
                                <!-- end product name -->
                                <!-- product code -->
                                <div class="text-gray-600 text-xs mt-2">
                                    Code: {{ $logistic->inv_code }}
                                </div>
                                <!-- end product code -->
                                <!-- product measurement -->
                                <div class="text-gray-600 text-xs">
                                    Measurement: {{ $logistic->inv_measurement }}
                                </div>
                                <!-- end product measurement -->
                                <!-- product quantity -->
                                <div class="text-gray-600 text-xs">
                                    Quantity: {{ $logistic->inv_quantity }}
                                </div>
                                <!-- end product quantity -->
                                <!-- price -->
                                <div>
                                    <div class="block w-full text-sm font-bold text-amber-700 mt-2">
                                        $ {{ $logistic->inv_price }}
                                    </div>
                                </div>
                                <!-- end price -->
                            </div>
                        </div>
                    </a>
                </div>
        @endforeach
    @endforeach
@endforeach
