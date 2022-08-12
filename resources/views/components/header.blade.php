<header>
    <div class="flex justify-center py-2 px-4">
        <div class="flex justify-between items-center w-screen xl:w-5/6">
            <div class="font-Cambria text-xl font-bold text-blue-800">ERZELG</div>
            <div class="flex items-center">
                <x-navigation.navigation/>
                @auth
                    <x-buttons.log text="LogOut" link="/logout" />   
                    <x-buttons.log text="Dashbord" link="/dashbord" />   
                @endauth
                @guest
                    <x-buttons.log text="Register" link="/register"/>
                    <x-buttons.log text="LogIn" link="/login"/>                  
                @endguest
            </div>
        </div>
    </div>
    <div class="w-full h-px bg-gray-300 m-0 p-0"></div>
</header>