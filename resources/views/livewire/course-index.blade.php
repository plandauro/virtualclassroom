<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="bg-gray-200 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <button class="bg-white shadow h-12 px-4 rounded-lg text-gray-700 mr-4"> 
                <i class="fas fa-archway text-xs mr-2"></i>
                Todos los Cursos
            </button>
        
            <!-- Dropdown CATEGORIAS-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true"> <!-- en el metodo x-on:click puede !open o puede ser true si se usa x-on:click.away -->
                    <i class="fas fa-tags text-sm mr-2"></i>
                    Categoría
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown  NIVELES-->
            <div class="relative mr-4" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true"> <!-- en el metodo x-on:click puede !open o puede ser true si se usa x-on:click.away -->
                    <i class="fas fa-layer-group text-sm mr-2"></i>
                    Niveles
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

            <!-- Dropdown ESTADO - AUN EN DESARROLLO-->
            <div class="relative" x-data="{ open: false }">
                <button class="px-4 text-gray-700 block h-12 rounded-lg overflow-hidden focus:outline-none bg-white shadow" x-on:click="open = true"> <!-- en el metodo x-on:click puede !open o puede ser true si se usa x-on:click.away -->
                    <i class="fas fa-charging-station text-sm mr-2"></i>
                    Estado
                    <i class="fas fa-angle-down text-sm ml-2"></i>
                </button>
                <!-- Dropdown Body -->
                <div class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl" x-show="open" x-on:click.away="open = false">   
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">Settings</a>
                    <div class="py-2">
                        <hr></hr>
                    </div>
                    <a href="#" class="transition-colors duration-200 block px-4 py-2 text-normal text-gray-900 rounded hover:bg-purple-500 hover:text-white">    
                        Logout
                    </a>
                </div>
                <!-- // Dropdown Body -->
            </div>
            <!-- // Dropdown -->

        </div> 
    </div>
</div>
