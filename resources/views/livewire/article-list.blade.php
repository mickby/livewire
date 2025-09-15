<div class="m-auto w-1/2 mb-4">
    <div class="mb-3 flex justify-between items-center">
        <a
        href="/dashboard/articles/create"
            class="text-white p-2 bg-blue-500 hover:bg-blue-700 rounded-sm"
            wire:navigate
            >
            Create Article
        </a>
        <livewire:published-count>
    </div>



    <table class="w-full">
        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
        <tr>
            <th class="px-6 py-3">Title</th>
            <th class="px-6 py-3"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($articles as $article)
            <tr wire:key="{{$article->id}}" class="border-b bg-gray-800 border-gray-700">
                <td class="px-6 py-3 text-white">{{$article->title}}</td>
                <td class="px-6 py-3 flex space-x-2">
                    <a class="text-white p-2 bg-blue-500 hover:bg-blue-700 rounded-sm"
                            wire:navigate
                            href="/dashboard/articles/{{$article->id}}/edit"
                    >
                        Edit
                    </a>
                    <button class="text-white p-2 bg-red-500 hover:bg-red-700 rounded-sm"
                            wire:click="delete({{$article->id}})"
                            wire:confirm="Are you sure you want to delete this article?"
                    >
                        Delete
                    </button>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
