<x-admin-layout>

    <div class="py-12 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
                <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/gh/Loopple/loopple-public-assets@main/riva-dashboard-tailwind/riva-dashboard.css">
                <div class="flex justify-end p-2">
                    <a href="{{ route('admin.permissions.create') }}"
                        style="background-color:rgb(18, 139, 148);color:white;width:100px;height:40px;padding: 2px 2px">Create
                        Permissions</a>
                </div>
                <div class="flex flex-wrap -mx-3 mb-5">
                    <div class="w-full max-w-full px-3 mb-6  mx-auto">
                        <div
                            class="relative flex-[1_auto] flex flex-col break-words min-w-0 bg-clip-border rounded-[.95rem] bg-white m-5">
                            <div
                                class="relative flex flex-col min-w-0 break-words border border-dashed bg-clip-border rounded-2xl border-stone-200 bg-light/30">
                                <!-- card body  -->
                                <div class="flex-auto block py-8 pt-6 px-9">
                                    <div class="overflow-x-auto">
                                        <table class="w-full my-0 align-middle text-dark border-neutral-200">
                                            <thead class="align-bottom">
                                                <tr class="font-semibold text-[0.95rem] text-secondary-dark">
                                                    <th class="pb-3 text-start min-w-[175px]">Name</th>
                                                    <th class="pb-3 text-end min-w-[50px]">DETAILS</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($permissions as $permission)
                                                    <tr class="border-b border-dashed last:border-b-0">
                                                        <td class="p-3 pl-0">
                                                            <div class="flex items-center">
                                                                <div
                                                                    class="relative inline-block shrink-0 rounded-2xl me-3">
                                                                    <img src="https://raw.githubusercontent.com/Loopple/loopple-public-assets/main/riva-dashboard-tailwind/img/img-49-new.jpg"
                                                                        class="w-[50px] h-[50px] inline-block shrink-0 rounded-2xl"
                                                                        alt="">
                                                                </div>
                                                                <div class="flex flex-col justify-start">
                                                                    {{ $permission->name }}
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td class="p-3 pr-7 text-end">
                                                            <a href="{{ route('admin.permissions.edit', $permission->id) }}"
                                                                class="ml-auto relative text-secondary-dark bg-light-dark hover:text-primary flex items-center h-[25px] w-[25px] text-base font-medium leading-normal text-center align-middle cursor-pointer rounded-2xl transition-colors duration-200 ease-in-out shadow-none border-0 justify-center">
                                                                <span
                                                                    class="flex items-center justify-center p-0 m-0 leading-none shrink-0 ">
                                                                    Edit
                                                                </span>
                                                            </a>

                                                            <form
                                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                                method="POST"
                                                                action="{{ route('admin.permissions.destroy', $permission->id) }}"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-5">
                    <div class="w-full max-w-full sm:w-3/4 mx-auto text-center">
                        <p class="text-sm text-slate-500 py-1"> Tailwind CSS Component from <a
                                href="https://www.loopple.com/theme/riva-dashboard-tailwind?ref=tailwindcomponents"
                                class="text-slate-700 hover:text-slate-900" target="_blank">Riva Dashboard</a> by <a
                                href="https://www.loopple.com" class="text-slate-700 hover:text-slate-900"
                                target="_blank">Loopple Builder</a>. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
