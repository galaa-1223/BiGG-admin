@extends('../bigg.layout.side-menu')

@section('subcontent')
    @if (\Session::has('success'))
        <div class="rounded-md flex items-center px-5 py-4 mb-2 mt-2 bg-theme-18 text-theme-9">
            <i data-feather="alert-triangle" class="w-6 h-6 mr-2"></i> {!! \Session::get('success') !!}
        </div>
    @endif
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Хичээлийн хуваарь</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            
        </div>
    </div>
    <!-- BEGIN: HTML Table Data -->
    <div class="intro-y box p-5 mt-5">
        <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
            <table class="table">
                <thead>
                    <tr>
                        <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">#</th>
                        <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">First Name</th>
                        <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Last Name</th>
                        <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap">Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border">1</td>
                        <td class="border">Angelina</td>
                        <td class="border">Jolie</td>
                        <td class="border">@angelinajolie</td>
                    </tr>
                    <tr>
                        <td class="border">2</td>
                        <td class="border">Brad</td>
                        <td class="border">Pitt</td>
                        <td class="border">@bradpitt</td>
                    </tr>
                    <tr>
                        <td class="border">3</td>
                        <td class="border">Charlie</td>
                        <td class="border">Hunnam</td>
                        <td class="border">@charliehunnam</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="overflow-x-auto scrollbar-hidden">
            <div class="mt-5 table-report table-report--tabulator" id="tabulator"></div>
        </div>
    </div>
    <!-- END: HTML Table Data -->
    <!-- BEGIN: Delete Confirmation Modal -->
    <div class="modal" id="delete-confirmation-modal">
        <div class="modal__content">
            <div class="p-5 text-center">
                <i data-feather="x-circle" class="w-16 h-16 text-theme-6 mx-auto mt-3"></i>
                <div class="text-3xl mt-5">Are you sure?</div>
                <div class="text-gray-600 mt-2">Do you really want to delete these records? This process cannot be undone.</div>
            </div>
            <div class="px-5 pb-8 text-center">
                <button type="button" data-dismiss="modal" class="button w-24 border text-gray-700 mr-1">Cancel</button>
                <button type="button" class="button w-24 bg-theme-6 text-white">Delete</button>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
@endsection

@section('style')
@endsection

@section('script')
@endsection