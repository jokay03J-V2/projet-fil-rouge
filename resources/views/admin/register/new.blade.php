<x-admin-layout>
    <x-slot name="name">Nouvelle utilisateur</x-slot>
    <div class="w-full flex justify-center">
        <x-form action="{{route('admin.register')}}" method="POST"
            class="md:flex-col m-0 py-14 px-16 w-fit rounded-lg bg-primary shadow-xl my-10">
            @csrf
            <div class="flex flex-col w-full">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name" class="rounded-lg border border-primary text-black w-full"
                    required placeholder="Entrer votre nom">
                @error('name')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="rounded-lg border border-primary text-black w-full"
                    required placeholder="Entrer votre email">
                @error('email')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col w-full">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="rounded-lg border border-primary text-black w-full" required
                    placeholder="Entrer votre mot de passe">
                @error('password')
                    <p class="text-red-400">{{$message}}</p>
                @enderror
            </div>
            <x-submit-button class="mt-4">Crée</x-submit-button>
        </x-form>
    </div>
</x-admin-layout>