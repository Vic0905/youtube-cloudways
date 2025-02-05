<x-layout>
    <h1 class="text-2xl mb-2">Tea details</h1>
    <h2 class="text-3xl bg-blue-900 p-2 rounded-xl mb-2">{{$tea['name']}}</h2>
    <h3 class="text-2xl  bg-blue-900 p-2 rounded-xl">{{$tea['price']}}</h3>

    <a class="bg-orange-500 p-2 m-4 rounded-xl text-2xl mt-4" href="/teas">Go back!</a>
</x-layout>