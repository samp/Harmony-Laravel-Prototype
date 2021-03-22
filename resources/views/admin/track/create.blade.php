<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row bg-white rounded-xl shadow overflow-hidden">
                <div class="p-6">
                    <h1>Create Track</h1>
                    <form method="post">
                        @csrf
                        <div>
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}">

                            @error('name')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="length">Length:</label>
                            <input type="text" name="length" id="length" value="{{ old('length') }}">

                            @error('length')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" min="0" step="any" value="{{ old('price') }}">

                            @error('price')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="buyable">Buyable:</label>
                            <input type="checkbox" id="buyable" name="buyable">

                            @error('buyable')
                                <p>{{ $message }}</p>
                            @enderror  
                        </div>

                        <div>
                            <label for="disc_id">Disc:</label>
                            <select name="disc_id" id="disc_id">
                                @foreach($discs as $disc)
                                    <option value="{{ $disc->id }}">{{ $disc->album->albumlisting->artist }} - {{ $disc->album->albumlisting->name }} ({{ $disc->album->format }} - {{ $disc->name }})</option>
                                @endforeach
                            </select>

                            @error('disc_id')
                                <p>{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" name="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
