<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }} 
        </h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 mb-6">
                        <a href="{{ route('posts.create') }}">😍 Adicione um novo Post</a>
                    </button>
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Imagem</th>
                                <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Titulo</th>
                                <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Texto</th>
                                <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Editar</th>
                                <th class="border border-gray-300 px-6 py-3 text-left font-semibold">Deletar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr class="hover:bg-gray-50">
                                    <td class="border border-gray-300 px-6 py-3">
                                        @if($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}" class="w-16 h-16 object-cover rounded">
                                        @else
                                            <span class="text-gray-400 text-xs">Sem imagem</span>
                                        @endif
                                    </td>
                                    <td class="border border-gray-300 px-6 py-3">{{ $post->title }}</td>
                                    <td class="border border-gray-300 px-6 py-3">{{ $post->text }}</td>
                                    <td class="border border-gray-300 px-6 py-3">
                                        <a href="{{ route('posts.edit', $post) }}" class="text-green-600 hover:text-green-900 hover:underline">Edit</a>
                                    </td>
                                    <td class="border border-gray-300 px-6 py-3">
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Tem certeza?')" class="text-red-600 hover:text-red-900">
                                                Deletar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   

    @forelse($posts as $post)
        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <div class="h-24 bg-gradient-to-r from-blue-500 to-purple-600 relative overflow-hidden flex items-end justify-between p-4">
                            <div class="absolute inset-0 bg-black/20"></div>
                            
                            <h3 class="text-3xl font-bold text-white line-clamp-2 relative z-10">
                                {{ $post->title }}
                            </h3>

                            <div class="flex gap-2 relative z-10">
                                <a href="{{ route('posts.edit', $post) }}" class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg transition-colors">
                                    Editar
                                </a>
                                <form method="POST" action="{{ route('posts.destroy', $post) }}" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Tem certeza?')" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white font-semibold rounded-lg transition-colors">
                                        Deletar
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="mb-3 mt-4">
                            <span class="inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-600 rounded-full">
                                @foreach ($categorias as $categoria)
                                    @if($categoria->id == $post->categorias_id)
                                        Categoria # {{ $categoria->name }}
                                    @endif
                                @endforeach
                            </span>
                        </div>

                        <p class="pl-1 h-auto text-lg text-slate-900 dark:text-slate-100 font-medium leading-relaxed line-clamp-3 mb-4">
                            {{ $post->text }}
                        </p>

                        @if($post->image)
                            <div class="mb-4">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="Imagem do {{ $post->title }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-md">
                            </div>
                        @endif

                        <div class="flex justify-between items-center pt-4 border-t border-gray-200 dark:border-gray-700">
                            </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center text-gray-500 mt-4">Nenhum post encontrado</p>
    @endforelse

</x-app-layout>