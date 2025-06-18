<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mango App') }}
        </h2>
    </x-slot> --}}

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8 ">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <x-category-tabs>
                        No categories
                    </x-category-tabs>

                </div>
            </div>
            <div class="mt-8 text-gray-900">
                <div class="p-4">

                    @forelse ($posts as $p)
                        <x-post-item :post="$p"></x-post-item>
                    @empty <p class="text-center text-gray-400 py-16">No posts found</p>
                    @endforelse


                </div>
                {{ $posts->onEachSide(1)->links() }}

            </div>
        </div>
    </div>
</x-app-layout>