<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique en ligne - Nos produits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- En-tête -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-indigo-600">MaBoutique</h1>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher un produit..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                        <i class="fas fa-shopping-cart mr-2"></i>Panier
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <main class="container mx-auto px-4 py-8">
        <!-- Filtres -->
        <div class="mb-8 flex flex-wrap gap-4">
            <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option>Toutes les catégories</option>
                <option>Électronique</option>
                <option>Vêtements</option>
                <option>Maison & Jardin</option>
                <option>Sport & Loisirs</option>
            </select>
            <select class="border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option>Trier par</option>
                <option>Prix croissant</option>
                <option>Prix décroissant</option>
                <option>Popularité</option>
                <option>Nouveautés</option>
            </select>
        </div>

        <!-- Grille de produits -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Produit 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         alt="Appareil photo professionnel" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded">Promo</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Appareil Photo Reflex</h3>
                    <p class="text-gray-600 text-sm mb-4">Appareil photo professionnel avec objectif 50mm. Idéal pour la photographie créative.</p>
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-lg font-bold text-indigo-600">599,99 €</span>
                            <span class="text-sm text-gray-500 line-through ml-2">749,99 €</span>
                        </div>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         alt="Casque audio" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Casque Audio Sans Fil</h3>
                    <p class="text-gray-600 text-sm mb-4">Casque audio haute qualité avec réduction de bruit active. Jusqu'à 30h d'autonomie.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">199,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                         alt="Montre connectée" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-green-500 text-white text-xs font-bold px-2 py-1 rounded">Nouveau</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Montre Connectée Sport</h3>
                    <p class="text-gray-600 text-sm mb-4">Montre connectée avec GPS intégré, suivi d'activité et monitoring cardiaque.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">249,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 4 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                         alt="Chaussures de sport" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Chaussures de Running</h3>
                    <p class="text-gray-600 text-sm mb-4">Chaussures de sport légères et confortables avec semelle amortissante pour la course.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">89,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 5 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                         alt="Sac à dos" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Sac à Dos Urbain</h3>
                    <p class="text-gray-600 text-sm mb-4">Sac à dos résistant à l'eau avec compartiment pour ordinateur portable jusqu'à 15 pouces.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">59,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 6 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1064&q=80" 
                         alt="Chaussures de sport" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Baskets Mode</h3>
                    <p class="text-gray-600 text-sm mb-4">Baskets tendance avec design unique et semelle confortable pour un usage quotidien.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">79,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 7 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1099&q=80" 
                         alt="Montre de luxe" class="w-full h-48 object-cover">
                    <span class="absolute top-2 right-2 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded">Épuisé</span>
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Montre Élégante</h3>
                    <p class="text-gray-600 text-sm mb-4">Montre-bracelet en acier inoxydable avec cadran bleu et bracelet en cuir.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-gray-400">349,99 €</span>
                        <button class="bg-gray-400 text-white px-3 py-2 rounded-lg cursor-not-allowed" disabled>
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Produit 8 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                         alt="Parfum" class="w-full h-48 object-cover">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg mb-2">Parfum Signature</h3>
                    <p class="text-gray-600 text-sm mb-4">Parfum élégant aux notes boisées et florales. Flacon de 100ml.</p>
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-bold text-indigo-600">129,99 €</span>
                        <button class="bg-indigo-600 text-white px-3 py-2 rounded-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
            <nav class="flex items-center space-x-2">
                <button class="px-3 py-2 rounded-lg border hover:bg-gray-100 transition">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="px-3 py-2 rounded-lg bg-indigo-600 text-white">1</button>
                <button class="px-3 py-2 rounded-lg border hover:bg-gray-100 transition">2</button>
                <button class="px-3 py-2 rounded-lg border hover:bg-gray-100 transition">3</button>
                <button class="px-3 py-2 rounded-lg border hover:bg-gray-100 transition">4</button>
                <button class="px-3 py-2 rounded-lg border hover:bg-gray-100 transition">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </nav>
        </div>
    </main>

    <!-- Pied de page -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-lg font-bold mb-4">MaBoutique</h3>
                    <p class="text-gray-400">Votre destination shopping en ligne pour les produits de qualité.</p>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Catégories</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Électronique</a></li>
                        <li><a href="#" class="hover:text-white transition">Vêtements</a></li>
                        <li><a href="#" class="hover:text-white transition">Maison & Jardin</a></li>
                        <li><a href="#" class="hover:text-white transition">Sport & Loisirs</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Service Client</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Contactez-nous</a></li>
                        <li><a href="#" class="hover:text-white transition">Livraison</a></li>
                        <li><a href="#" class="hover:text-white transition">Retours</a></li>
                        <li><a href="#" class="hover:text-white transition">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Newsletter</h3>
                    <p class="text-gray-400 mb-2">Inscrivez-vous pour recevoir nos offres exclusives</p>
                    <div class="flex">
                        <input type="email" placeholder="Votre email" class="px-3 py-2 rounded-l-lg text-gray-800 w-full">
                        <button class="bg-indigo-600 px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; 2023 MaBoutique. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>