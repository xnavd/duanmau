<!--product details  -->
<section class="product_details container mx-auto my-10">
    <div class="flex justify-center space-x-20">
        <!-- <img src="../../admin/upload/" alt=""> -->
        <?php
        extract($one_sp);
        echo '
        <div class="img_product max-w-[550px] max-h-[550px]">
            <img src="../admin/upload/' . $hinh . '" alt="" class="w-full h-full border-4 p-6">
        </div>
        <div class="info py-10">

            <div>
                <h1 class="font-bold uppercase text-[30px] my-4">' . $ten_hh . '</h1>
            </div>
            <div class="price text-gray-400 text-[24px] my-4">
                ' . $don_gia . ' vnđ
            </div>

            <div class="add_cart bg-black inline-block text-white p-3 rounded my-4">
                <a href="index.php?act=cart">
                    Thêm vào giỏ hàng
                </a>
            </div> 
        </div>

        
    </div>
    <div class="description my-8">
        <div class="bg-black text-white inline-block font-semibold p-2">
            Mô tả
        </div>
        <div class="bg-[#F1F1F1] py-7 px-20">
            <p class="font-bold uppercase my-2 tracking-wider">' . $ten_hh . '</p>
            <p class="text-gray-500">Mô tả: ' . $mo_ta . '</p>
        </div>
    </div>
    ';
        ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#binhluan").load("../view/comment/form_cmt.php", {
                    id_product: <?= $ma_hh ?>
                });
            });
        </script>

        <div id="binhluan">

        </div>


</section>


<!-- sản phẩm liên quan -->
<section class="relate_product">
    <section class="top-view my-20">
        <div class="container mx-auto">
            <p class="text-gray-500">Bouti</p>
            <h1 class="font-bold uppercase text-[24px]">Sản phẩm liên quan</h1>
        </div>
        <div class="flex justify-center items-center ">
            <div class="container mx-auto flex my-10">
                <div class="grid grid-cols-5 gap-6 ">
                    <?php
                    foreach ($sanpham_cungloai as $show) {
                        extract($show);
                        $link = "index.php?act=product_details&ma_hh=" . $ma_hh;
                        echo '
                        <div class="bg-white shadow-lg hover:shadow-xl rounded-lg relative">
                        <div class="text-right absolute top-2 right-2">

                        </div>
                        <div>
                            <a href="' . $link . '">
                                <div class=" h-64 rounded-t-lg p-4 bg-no-repeat bg-center bg-cover">
                                <img src="../admin/upload/' . $hinh . '" alt="" class="w-full h-full">
                                </div>
                                <div class="flex justify-between items-start px-2 pt-2">
                                    <div class="p-2 flex-grow">
                                        <h1 class="font-medium text-xl font-poppins"> ' . $ten_hh . '</h1>
                                        <p class="text-gray-500 font-nunito">' . $mo_ta_ngan . '</p>
                                    </div>
                                    <div class="p-2 text-right">
                                         <div class="text-teal-500 font-semibold text-lg font-poppins">' . $don_gia . ' vnđ</div>
                                       
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        ';
                    }

                    ?>
                </div>
            </div>
        </div>
    </section>
</section>