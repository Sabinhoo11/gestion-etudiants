<!DOCTYPE html>
<html>
<head>
    <title>Etudiants</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Liste des Etudiants</h1>
            <a href="{{ route('etudiants.create') }}" 
               class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                + Ajouter
            </a>
        </div>

        <div class="bg-white rounded-xl shadow overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-gray-50 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-4">Nom</th>
                        <th class="px-6 py-4">Age</th>
                        <th class="px-6 py-4">Note</th>
                        <th class="px-6 py-4">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($etudiants as $etudiant)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 font-medium">{{ $etudiant->nom }}</td>
                        <td class="px-6 py-4">{{ $etudiant->age }}</td>
                        <td class="px-6 py-4">{{ $etudiant->note }}</td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="{{ route('etudiants.edit', $etudiant->id) }}"
                               class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">
                                Modifier
                            </a>
                            <form action="{{ route('etudiants.destroy', $etudiant->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>