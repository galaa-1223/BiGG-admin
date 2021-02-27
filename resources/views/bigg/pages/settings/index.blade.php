@extends('../bigg.layout.side-menu')

@section('subcontent')
    @if (\Session::has('success'))
        <div class="rounded-md flex items-center px-5 py-4 mb-2 mt-2 bg-theme-18 text-theme-9">
            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Тохиргоо талбар</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 xxl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="{{ config('settings.site_name') }}" class="rounded-full" src="{{ ($user->image == null) ? asset('dist/images/Blank-avatar.png') : asset('uploads/users/thumbs/'.$user->image)}}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $user->name }}</div>
                        <div class="text-gray-600">{{ $user->email }}</div>
                    </div>
                </div>
                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                    <a class="flex items-center text-theme-1 dark:text-theme-10 font-medium" href="{{route('bigg-settings')}}">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Хувийн мэдээлэл
                    </a>
                    <a class="flex items-center mt-5" href="{{route('bigg-settings-password')}}">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Нууц үг солих
                    </a>
                </div>
                <div class="p-5 border-t border-gray-200 dark:border-dark-5">
                    <a class="flex items-center" href="{{route('bigg-settings-huvaari')}}">
                        <i data-feather="calendar" class="w-4 h-4 mr-2"></i> Хуваарь тохиргоо
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <!-- BEGIN: Хувийн мэдээлэл -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Хувийн мэдээлэл</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="{{ config('settings.site_name') }}" src="{{ ($user->image == null) ? asset('dist/images/Blank-avatar.png') : asset('uploads/users/thumbs/'.$user->image)}}">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="button w-full bg-theme-1 text-white">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label>Display Name</label>
                                <input type="text" class="input w-full border bg-gray-100 cursor-not-allowed mt-2" placeholder="Input text" value="images" disabled>
                            </div>
                            <div class="mt-3">
                                <label>Nearest MRT Station</label>
                                <div class="mt-2">
                                    <select data-search="true" class="tail-select w-full">
                                        <option value="1">Admiralty</option>
                                        <option value="2">Aljunied</option>
                                        <option value="3">Ang Mo Kio</option>
                                        <option value="4">Bartley</option>
                                        <option value="5">Beauty World</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Postal Code</label>
                                <div class="mt-2">
                                    <select data-search="true" class="tail-select w-full">
                                        <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                        <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                        <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                        <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                        <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Address</label>
                                <textarea class="input w-full border mt-2" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                            </div>
                            <button type="button" class="button w-20 bg-theme-1 text-white mt-3">{{ __('site.save') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Хувийн мэдээлэл -->
        </div>
    </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection