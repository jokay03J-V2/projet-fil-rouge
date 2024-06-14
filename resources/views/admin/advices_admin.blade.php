<x-admin-layout>
    <x-slot name="name">Les conseils</x-slot>
    <section class="w-11/12 mx-auto ">
        <form action="{{route('admin.advice')}}" class="flex flex-col m-10 gap-2">
            <div class="flex justify-between">
                <select name="categoryAdvice" id="query" class="rounded-lg border-secondary text-black w-10/12">
                    <option value="all" selected>Toutes les catégories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <button class="p-2 border border-secondary rounded-lg">ok</button>
            </div>
            <div class="flex flex-col">
                <input type="search" name="query" id="search" class="rounded-lg border-b-2 border-secondary text-black"
                    placeholder="Rechercher par titre">
            </div>
        </form>

        <div class="flex justify-center my-20">
            <table class="w-11/12">
                <thead class="flex justify-between border-b-2 border-black pb-2 uppercase relative">
                    <tr class="flex gap-10 p-1 text-xl">
                        <th>nom</th>
                        <th class="absolute left-[30%] truncate">content</th>
                    </tr>
                    <tr class="flex gap-3">
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody class="justify-between border-b border-black p-2">
                @foreach ($advices as $advice)
                        <tr class="flex gap-16 relative w-full border-b border-black p-5 h-20">
                            <td class="absolute left-0 truncate w-20">{{$advice->name}}</td>
                            <td class="absolute left-[30%] truncate w-32 md:w-52 lg:w-96">{{$advice->content}}</td>
                            <td class="absolute right-16" ><a href="advices/{{$advice->id}}/edit"><x-lucide-pencil class="w-6 m-0.5"/></a></td>
                            <td class="absolute right-0"><x-lucide-trash-2 class="w-6 m-0.5"/></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </section>
</x-admin-layout>