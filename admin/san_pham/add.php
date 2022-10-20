<div class="bg-gray-200">
<div class="container mx-auto p-24">
    <div class="my-6">
        <?php
        if (isset($msg) && ($msg != "")) {
            echo '
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 inline-block">
                ' . $msg . '
                </div>
            ';
        }
        ?>
    </div>

    <form action="index.php?act=add_sanpham" method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Tên sản phẩm</label>
            <input type="text" name="ten_hh" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Đơn giá</label>
            <input type="number" name="don_gia" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Hình </label>
            <input type="file" name="hinh" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Mô tả </label>
            <textarea name="mo_ta" id="" cols="30" rows="10" required></textarea>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Mô tả ngắn </label>
            <input type="text" name="mo_ta_ngan" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Số lượt xem </label>
            <input type="number" name="so_luot_xem" class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" disabled>
        </div>
        <div class="grid grid-cols-5 my-2">
            <label for="" class="block text-gray-700 text-xl font-bold mb-2 text-right mx-2">Loại hàng</label>
            <select name="ma_loai" id="">
                <?php
                foreach ($list_loaihang as $show) {
                    extract($show);
                    echo '
                        <option value="' . $ma_loai . '">
                            ' . $ten_loai . '
                        </option>
                    ';
                }
                ?>
            </select>

        </div>
        <?php

        ?>
        <br>
        <div>
            <button type="submit" name="add_sanpham" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Thêm sản phẩm
            </button>
            <a href="index.php?act=list_sanpham" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">Danh sách</a>
        </div>
    </form>
</div>
</div>