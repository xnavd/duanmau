<div class="bg-gray-200">
    <div class="container mx-auto p-24">
        <table class="divide-y divide-gray-300 w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-2 text-xl text-gray-500">
                        Mã loại
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Tên loại
                    <th class="py-2 text-xl text-gray-500">
                        Sửa
                    </th>
                    <th class="py-2 text-xl text-gray-500">
                        Xóa
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-300">
                <!-- <tr class="whitespace-nowrap">
                <td class="pl-40 py-4 text-sm text-gray-500">
                    1
                </td>
                <td class="pl-40 py-4">
                    <div class="text-sm text-gray-900">
                        Jon doe
                    </div>
                </td>
                <td class="pl-40 py-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td>
                <td class="pl-40 py-4">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
            </tr> -->

                <?php
                foreach ($list_loaihang as $show) {
                    extract($show);

                    //tao bien sua, xoa
                    $sua_loaihang = "index.php?act=sua_loaihang&ma_loai=" . $ma_loai;
                    $xoa_loaihang = "index.php?act=xoa_loaihang&ma_loai=" . $ma_loai;
                    //
                    echo '
                <tr class="whitespace-nowrap">
                <td class="pl-40 py-4 text-sm text-gray-500">
                    ' . $ma_loai . '
                </td>
                <td class="pl-40 py-4">
                    <div class="text-sm text-gray-900">
                        ' . $ten_loai . '
                    </div>
                </td>
                <td class="pl-40 py-4">
                    <a href="' . $sua_loaihang . '">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                </td>
                <td class="pl-40 py-4">
                    <a href="' . $xoa_loaihang . '">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </a>
                </td>
            </tr>
                ';
                }
                ?>
            </tbody>
        </table>
        <br> <br>
        <div>
            <a href="index.php?act=add_loaihang" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-4 rounded">
                Nhập thêm
            </a>
        </div>
    </div>
</div>