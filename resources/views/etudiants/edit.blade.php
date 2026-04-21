<!DOCTYPE html>
<html>
<head>
    <title>Modifier Etudiant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-lg mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Modifier Etudiant</h1>
            <a href="{{ route('etudiants.index') }}" 
               class="text-blue-500 hover:underline">← Retour</a>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <form action="{{ route('etudiants.update', $etudiant->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="mb-4">
                    <label class="block text-gray-600 mb-1">Nom</label>
                    <input type="text" name="nom" value="{{ $etudiant->nom }}"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-600 mb-1">Age</label>
                    <input type="number" name="age" value="{{ $etudiant->age }}"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-600 mb-1">Note</label>
                    <input type="number" name="note" value="{{ $etudiant->note }}"
                           class="w-full border rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <button type="submit" 
                        class="w-full bg-yellow-400 text-white py-2 rounded-lg hover:bg-yellow-500">
                    Modifier
                </button>
            </form>
        </div>
    </div>
</body>
</html>