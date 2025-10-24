@extends('layout.app')

@section('content')

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">


@forelse ( $products as $product )

 <x-card-product :product="$product"/>   

@empty Il n'y a pas de produit en base 

    

@endforelse


</div>

 
    {{--grille de produit modele 1 produit par ranger tablette 2 produits par ranger ordinateur 4 par ranger --}}

@endsection

