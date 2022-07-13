<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>
<body>

<header class="bg-white p-4">
    <div class="max-w-screen-xl container mx-auto">

        <div class="flex justify-between items-center">
            <!-- Brand -->
            <div>
                <a class="text-3xl text-primary font-bold block leading-[1.2] underline underline-offset-[3]">BRUCGT</a>
                <span class="block text-xs font-medium leading-[1.3]">BRU Consumer Goods Trading</span>
            </div>

            <?php 
                wp_nav_menu([
                    'theme_location' => 'header-menu',
                    'container' => ''
                ]) 
            ?>


        </div>

        <div class="mt-4 flex gap-4">
            <button class="bg-primary rounded-t text-white font-light py-2 px-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
                Browse Category
            </button>

            <div class="flex-grow">
                <input 
                    class="h-full border border-gray-300 focus:border-primary px-4 rounded focus:outline-red-500" 
                    type="search" 
                    name="" 
                    placeholder="Search Products Here"
                />
            </div>
        </div>

    </div>
</header>

<div class="bg-red-100">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>