<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body>

<div class="flex flex-col h-screen bg-gray-100">

    <div class="grid place-items-center mx-2 my-20 sm:my-auto">
        <div class="flex">
            <span class="text-center font-bold my-20 mx-auto">        
                <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank" class="text-blue-600">
                    Convert to SASS
                </a>
            </span>
        </div>


        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">

       
            <h2 class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">
                Register
            </h2>

            <form action="{{ route('NewFile.register') }}" class="mt-10" method="get">
   
                <label for="name" class="block text-xs font-semibold text-gray-600 uppercase">Full Name</label>
                <input id="name" type="text" name="name" placeholder="Full name" autocomplete="name"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

               
                <label for="email" class="block mt-4 text-xs font-semibold text-gray-600 uppercase">E-mail</label>
                <input id="email" type="email" name="email" placeholder="e-mail address" autocomplete="email"
                    class="block w-full py-3 px-1 mt-2 
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

               
                <label for="password" class="block mt-4 text-xs font-semibold text-gray-600 uppercase">Password</label>
                <input id="password" type="password" name="password" placeholder="password" autocomplete="new-password"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

           
                <label for="confirm-password" class="block mt-4 text-xs font-semibold text-gray-600 uppercase">Confirm Password</label>
                <input id="confirm-password" type="password" name="confirm-password" placeholder="confirm password" autocomplete="new-password"
                    class="block w-full py-3 px-1 mt-2 mb-4
                    text-gray-800 appearance-none 
                    border-b-2 border-gray-100
                    focus:text-gray-500 focus:outline-none focus:border-gray-200"
                    required />

              
                <button type="submit"
                    class="w-full py-3 mt-10 bg-gray-800 rounded-sm
                    font-medium text-white uppercase
                    focus:outline-none hover:bg-gray-700 hover:shadow-none">
                    Register
                </button>

            
                <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                    <a href="{{ route('NewFile.Contact') }}" class="flex-2 underline">
                        Already have an account?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
