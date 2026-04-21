<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Etudiant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-lg mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Ajouter Etudiant</h1>
            <a href="{{ route('etudiants.index') }}" 
               class="text-blue-500 hover:underline">← Retour</a>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <form action="/etudiants" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-600 mb-1">Nom</label>
                    <input type="text" name="nom" 
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-1">Age</label>
                    <input type="number" name="age" 
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-600 mb-1">Note</label>
                    <input type="number" name="note" 
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>
                <button type="submit" 
                        class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">
                    Ajouter
                </button>
            </form>
        </div>
    </div>
</body>
</html>