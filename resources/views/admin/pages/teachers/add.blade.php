@extends('../admin.layout.side-menu')

@section('subcontent')
    @if (\Session::has('success'))
        <div class="rounded-md flex items-center px-5 py-4 mb-2 mt-2 bg-theme-18 text-theme-9">
            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 lg:col-span-8 xxl:col-span-9">
            <form action="{{ route('teachers-save') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- BEGIN: Үндсэн мэдээлэл -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Үндсэн мэдээлэл</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-4">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div class="w-40 h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img id="preview-image" class="rounded-md" alt="BiGG systems 1.0" src="{{ asset('dist/images/Blank-avatar.png') }}">
                                    <div id="remove-image" title="Зургийг устгах уу?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full cursor-pointer text-white bg-theme-6 right-0 top-0 -mr-2 -mt-2 hidden">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="w-40 mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="button w-full bg-theme-1 text-white cursor-pointer">Зураг оруулах</button>
                                    <input type="file" name="image" id="image" accept="image/png, image/jpeg" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-8">
                            <div>
                                <label>Багшийн нэр:</label>
                                <input type="text" name="ner" id="ner" class="input w-full border bg-gray-100 mt-2" />
                            </div>
                            <div class="mt-3">
                                <label>Эцгийн нэр:</label>
                                <input type="text" name="ovog" id="ovog" class="input w-full border bg-gray-100 mt-2" />
                            </div>
                            <div class="mt-3">
                                <label>Ургийн овог:</label>
                                <input type="text" name="urag" id="urag" class="input w-full border bg-gray-100 mt-2" />
                            </div>
                            <div class="mt-3">
                                <label>Багшийн код:</label>
                                <input type="text" id="code" name="code" class="input w-full border bg-gray-100 mt-2" />
                            </div>
                            <div class="mt-3">
                                <label>Тэнхим:</label>
                                <div class="mt-2">
                                    <select data-search="true" class="tail-select w-full">
                                        <option value="1">Тэнхим 1</option>
                                        <option value="2">Тэнхим 2</option>
                                        <option value="3">Тэнхим 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3">
                                <label>Мэргэжлийн багш:</label>
                                <div class="mt-2">
                                    <select data-search="true" class="tail-select w-full">
                                        <option value="1">Компьютерийн багш</option>
                                        <option value="2">Тогоочийн багш</option>
                                        <option value="3">Барилгын багш</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Үндсэн мэдээлэл -->
            <!-- BEGIN: Хувийн мэдээлэл -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Хувийн мэдээлэл</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Регистрийн дугаар:</label>
                                <input type="text" name="register" id="register" class="input w-full border mt-2" placeholder="ҮҮ000000" />
                            </div>
                            <div class="mt-3">
                                <label>Хүйс:</label>
                                <select name="huis" id="huis" class="input w-full border mt-2">
                                    <option value="er">Эрэгтэй</option>
                                    <option value="em">Эмэгтэй</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label>Төрсөн огноо:</label>
                                <input type="text" name="tursun" id="tursun" class="input w-full border mt-2" placeholder="YYYY/MM/DD" />
                            </div>
                            
                        </div>
                        <div class="col-span-12">
                            <div>
                                <label>Гэрийн хаяг:</label>
                                <textarea name="address" id="address" class="input w-full border mt-2"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Хувийн мэдээлэл -->
            <!-- BEGIN: Нэмэлт мэдээлэл -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">Нэмэлт мэдээлэл</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3">
                                <label>Имэйл хаяг:</label>
                                <input type="text" name="email" id="email" class="input w-full border bg-gray-100 mt-2" />
                            </div>
                            
                            <div class="mt-3">
                                <label>Нууц үг:</label>
                                <input type="text" name="password" id="password" class="input w-full border mt-2" value="{{ rand(1000,9999) }}">
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3">
                                <label>Утасны дугаар:</label>
                                <input type="text" name="phone" id="phone" class="input w-full border mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" onclick="window.location.href='{{ route('teachers-add') }}'" class="button w-40 bg-theme-6 text-white ml-5">{{ __('site.cancel') }}</button> 
                        <button type="submit" name="action" value="save_and_new" class="button w-40 bg-theme-1 text-white ml-5">{{ __('site.save_and_new') }}</button> 
                        <button type="submit" name="action" value="save" class="button w-40 bg-theme-1 text-white ml-5">{{ __('site.save') }}</button>
                    </div>
                </div>
            </div>
            <!-- END: Нэмэлт мэдээлэл -->
            </form>
        </div>
        <!-- BEGIN: Profile Menu -->
        <!-- END: Profile Menu -->

    </div>
@endsection

@section('style')
@endsection

@section('script')
@endsection