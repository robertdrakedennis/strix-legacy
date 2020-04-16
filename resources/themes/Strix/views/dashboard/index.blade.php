@extends('layouts.dashboard')


@section('content')

    <div class="container mx-auto flex flex-1">

        <div class="bg-gray-400 w-1/3 h-48 flex items-center justify-center m-3">
            <dropdown-component>
                <template v-slot:trigger>
                    <button class="bg-red-400">Test</button>
                </template>

                <li class="text-gray-700 text-sm">
                    <a class="flex items-center px-6 py-2 hover:bg-gray-400 transition-all" href="#">
                        <i class="fas fa-fw fa-pen mr-2 text-blue-600"></i>
                        <span>Edit</span>
                    </a>
                </li>
                <li class="text-gray-700 text-sm">
                    <a class="flex items-center px-6 py-2 hover:bg-gray-400 transition-all" href="#">
                        <i class="fas fa-fw fa-trash-alt mr-2 text-red-600"></i>
                        <span>Delete</span>
                    </a>
                </li>
                <li class="text-gray-700 text-sm">
                    <a class="flex items-center px-6 py-2 hover:bg-gray-400 transition-all" href="#">
                        <i class="fas fa-fw fa-exclamation-triangle mr-2 text-orange-600"></i>
                        <span>Report</span>
                    </a>
                </li>
            </dropdown-component>
        </div>

        <div class="bg-gray-400 w-1/3 h-48 flex items-center justify-center m-3">

            <a href="#cancel-modal">Open Modal</a>

            <modal-component name="cancel-modal">
                <h1 class="text-black font-bold text-3xl mb-4">Leaving so soon?</h1>


                <p class="leading-normal mb-10 text-gray-600">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex .
                </p>

                <template v-slot:footer>
                    <button @click="$modal.hide('cancel-modal')" class="btn btn-neutral rounded mx-2">Cancel</button>
                    <a href="#" class="btn btn-success rounded">Continue</a>
                </template>
            </modal-component>
        </div>

        <div class="bg-gray-400 w-1/3 h-48 flex items-center justify-center m-3">
            <tabs-component>
                <tab-component title="First">
                   <div class="p-4">
                       <p>Hello world and out 1</p>
                   </div>
                </tab-component>
                <tab-component title="Second">
                    <div class="p-4">
                        <p>Hello world and out 2</p>
                    </div>
                </tab-component>
                <tab-component title="Third">
                    <div class="p-4">
                       <p> Hello world and out 3</p>
                    </div>
                </tab-component>
                <tab-component title="Wew" active>
                    <div class="p-4">
                        <p>Hello world and out 4</p>
                    </div>
                </tab-component>
            </tabs-component>
        </div>

    </div>

    <div class="container mx-auto flex flex-1">

        <div class="bg-gray-400 w-full h-48 flex flex-1 items-center justify-center m-3">
            <button class="btn btn-success btn-xs m-1 rounded">Test</button>
            <button class="btn btn-success btn-sm m-1 rounded">Test</button>
            <button class="btn btn-success m-1 rounded">Test</button>
            <button class="btn btn-success btn-lg m-1 rounded">Test</button>
            <button class="btn btn-success btn-xl m-1 rounded">Test</button>
        </div>

    </div>
@endsection
