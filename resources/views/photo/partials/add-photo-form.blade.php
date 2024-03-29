<section x-data='{"isModalOpen" : false}' x-on:keydown.ecsape='isModalOpen=false'>

<x-primary-button x-on:click='isModalOpen = true'>{{ __('Добавить свой фото-отзыв') }}</x-primary-button>

    <div  class='fixed z-50 bg-gray-900 inset-0 bg-opacity-60 overflow-y-auto h-full w-full px-4' x-show='isModalOpen'  x-cloak>
        <div  x-on:click.outside ='isModalOpen = false'>
        <div class='relative p-6 mt-52 mx-auto shadow-xl rounded-md bg-white max-w-md' x-show = 'isModalOpen' x-cloack x-transition>
            <div class='flex justify-between'>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Добавить свой фото-отзыв') }}
                </h2>

                <div class='flex justify-end p2 cursor-pointer'  x-on:click='isModalOpen = false'>
                    <span class='text-black'>X</span>
                </div>
            </div>

                <form method="post" action="{{ asset('review') }}" class="mt-6 space-y-6" enctype='multipart/form-data'>
                    @csrf

                    <div>
                        <x-input-label for="add_photo_text" :value="__('Напишите пару слов')" />
                        <x-text-input id="add_photo_text" name="comment" type="text" class="mt-1 block w-full" autocomplete="comment" />
                        <!-- messages="$errors->updatePassword->get('comment')"  -->
                        <x-input-error :messages="$errors->updatePassword->get('comment')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="add_photo_file" :value="__('Ваше фото для фото-отзыва')" />
                        <x-text-input id="add_photo_file" name="add_photo_file" type="file" class="mt-1 block w-full" autocomplete="add_photo_file" />
                        <!-- messages="$errors->updatePassword->get('password')"  -->
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Добавить') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600 dark:text-gray-400"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>
            </div>
            </div>
</div>
</section>
