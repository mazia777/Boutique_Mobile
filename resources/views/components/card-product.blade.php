{{-- ma carte product --}}


<div clas="bg-white-rounded-lg swadow-md overflow-hidden hover:swadow-xl transition">


    <div class="bg color bg-gray-300 h-64 flex items-center justify-center">
        <img src="{{$product->image}}"alt="">

    </div>
        <div class="p4">

            <span class="text-xs text-orange-600 font-semibold">

                {{$product->category->name}}
            </span>

            <h3 class="text-lg font-bold mt-2 mb-2 text-gray-500">

            {{$product->name}}
                <p class="text-gray-600 text-sm mb-4 bottom-4">

                    Description du produit
                </p>

                <div class="felx items-center justify-between">

                    <span class="text-2xl font-bold text-blue-600 ">
                        Prix
                    </span>

                    <a href=" {{route('show',$product->id)}}"
                    class="bg-blue-600 text-white px-4 rounded-lg hover:bg-blue-700 transition-color">
                        voir
                    </a>

                </div>


            </h3>

        </div>


    


</div>
