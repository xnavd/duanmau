<!-- signin -->

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class="w-8 h-8 mr-2" src="./img/favicon.png" alt="logo">
            Bouti
        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Đổi mật khẩu
                </h1>
                <form class="space-y-4 md:space-y-6" action="index.php?act=update_pass" method="POST">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Mật khẩu cũ</label>
                        <input type="password" name="matkhau_old" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Mật khẩu mới</label>
                        <input type="password" name="matkhau_new" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                    </div>
                    <button type="submit" name="update_pass" class="w-full text-white bg-sky-400 hover:bg-sky-400 focus:ring-4 focus:outline-none focus:ring-sky-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-sky-400 dark:hover:bg-sky-400 dark:focus:ring-sky-400">Gửi</button>
                </form>
            </div>
            <div class="my-6 text-center text-green-500">
                <?php
                if (isset($msg) && ($msg != "")) {
                    echo $msg;
                }
                ?>
            </div>
        </div>
    </div>
</section>