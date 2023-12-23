<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Generate Image
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <section>
                        <div class="space-y-4">
                            <div>
                                <label for="prompt" class="block font-medium text-sm text-gray-700 dark:text-gray-300">Prompt</label>
                                <input wire:model.live="prompt" type="text" id="prompt" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md">
                                <x-input-error class="mt-2" :messages="$errors->get('prompt')" />
                            </div>

                            <div>

                            </div>

                            <div class="flex items-center gap-4">
                                <button wire:click="generate" class="px-4 py-2 bg-gray-200 border rounded-md font-semibold text-xs text-gray-800 uppercase dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Generate</button>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </div>
</div>
