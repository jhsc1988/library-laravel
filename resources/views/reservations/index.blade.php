<x-layout>
    <div class="mx-16 my-16 mt-24 b-shadow overflow-hidden rounded-lg">
        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                <tr>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Ime</th>
                    <th scope="col" class="px-6 py-4">Prezime</th>
                    <th scope="col" class="px-6 py-4">Naslov</th>
                    <th scope="col" class="px-6 py-4">Autor</th>
                    <th scope="col" class="px-6 py-4">Akcija</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($reservations as $index => $reservation)
                    <tr class="{{ $index % 2 == 0 ? 'bg-white' : 'bg-gray-100' }} dark:border-neutral-500">
                        <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $index + 1 }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $reservation->user->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $reservation->user->surname }}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <a href="{{ route('listings.show', ['listing' => $reservation->listing->id]) }}" class="text-blue-500 hover:underline font-bold">{{ $reservation->listing->title }}</a>
                        </td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $reservation->listing->author }}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <form method="POST" action="{{ route('reservations.destroy', ['reservation' => $reservation->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 font-bold">
                                    Briši
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
